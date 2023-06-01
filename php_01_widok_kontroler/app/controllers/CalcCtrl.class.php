<?php
// KONTROLER strony kalkulatora
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use PDOException;

class CalcCtrl 
{    
    private $form;
    private $result;
    private $records;

    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();    
    }

    public function getParams()
    {
        $this->form->Kwota = getFromRequest('Kwota');
        $this->form->Miesiace = getFromRequest('Miesiace');
        $this->form->Oprocentowanie = getFromRequest('Oprocentowanie');
    }

    public function validate()
    {
        if(!(isset($this->form->Kwota) && isset($this->form->Miesiace) && isset($this->form->Oprocentowanie))) 
        {
            return false;
        }

        if($this->form->Kwota == "") 
        {
            getMessages()->addError('Nie podano Kwoty');
        } elseif(!is_numeric($this->form->Kwota))

        {
            getMessages()->addError('Podaj Kwote :(');
        }

        if($this->form->Miesiace == "") 
        {
            getMessages()->addError('Nie podano Miesiecy');
        } elseif(!is_numeric($this->form->Miesiace))

        {
            getMessages()->addError('Podaj Miesiace :(');
        }

        if($this->form->Oprocentowanie == "") 
        {
            getMessages()->addError('Nie podano Oprocentowania');
        } elseif(!is_numeric($this->form->Oprocentowanie))

        {
            getMessages()->addError('Podaj Oprocentowanie :(');
        }


        return ! getMessages()->isError();
    }
	
	public function action_calcCompute()
    {
        $this->getparams();

        if ($this->validate()) 
        {
            $this->form->Kwota = floatval($this->form->Kwota);
            $this->form->Miesiace = floatval($this->form->Miesiace);
            $this->form->Oprocentowanie = floatval($this->form->Oprocentowanie);
            getMessages()->addInfo('Informacje dodane poprawnie.');

            $this->result->result =round (($this->form->Kwota * ($this->form->Miesiace) * ($this->form->Oprocentowanie/100)/12),2);
            getMessages()->addInfo('Wykonano obliczenia odsetek.');
        }
        $this->action_ResultSave();
    }
    public function action_ResultSave(){

		if ($this->validate()) {
			try {
				getDB()->insert("result", [
					"Kwota" => $this->form->Kwota,
					"Miesiace" => $this->form->Miesiace,
					"Oprocentowanie" => $this->form->Oprocentowanie,
					"result" => $this->result->result
				]);
				getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
			
			$this->action_ResultList();

		} else {
			$this->action_ResultList();
		}
	}
    
    public function action_ResultList(){
		try{
			$this->records = getDB()->select("result", [
					"idresult",
					"Kwota",
					"Miesiace",
					"Oprocentowanie",
                    "result"
				]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
        }
        $this->generateView();
	}    
    public function action_calcShow()
    {
		getMessages()->addInfo('Witaj w kalkulatorze odsetek');
		$this->action_ResultList();
	}
    public function generateView()
    {
		getSmarty()->assign('user',unserialize($_SESSION['user']));
        
        getSmarty()->assign('page_title','Kalkulator Odsetek');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        getSmarty()->assign('record',$this->records);
        
        getSmarty()->display('calc.html');
    }
    public function action_chronionaView()
    {
		getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title','Chroniona Strona');
        
        getSmarty()->display('inna_chroniona.html');
	}
}