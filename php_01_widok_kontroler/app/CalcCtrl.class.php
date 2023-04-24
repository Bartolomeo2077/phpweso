<?php
// KONTROLER strony kalkulatora
require_once $conf->root_path.'/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
require_once $conf->root_path.'/app/security/LoginCtrl.class.php';
include $conf->root_path.'/app/security/check.php';

class CalcCtrl 
{

    private $msgs;
    private $form;
    private $result;




    public function __construct()
    {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();    
    }





    public function getParams()
{
	$this->form->Kwota = isset($_REQUEST['Kwota']) ? $_REQUEST['Kwota'] : null;
	$this->form->Miesiace = isset($_REQUEST['Miesiace']) ? $_REQUEST['Miesiace'] : null;
	$this->form->Oprocentowanie = isset($_REQUEST['Oprocentowanie']) ? $_REQUEST['Oprocentowanie'] : null;
}

    public function validate()
    {
        if(!(isset($this->form->Kwota) && isset($this->form->Miesiace) && isset($this->form->Oprocentowanie))) 
        {
            return false;
        }

        if($this->form->Kwota == "") 
        {
            $this->msgs->addError('Nie podano Kwoty');
        } elseif(!is_numeric($this->form->Kwota))

        {
            $this->msgs->addError('Podaj Kwote :(');
        }
        if($this->form->Miesiace == "") 
        {
            $this->msgs->addError('Nie podano Miesiecy');
        } elseif(!is_numeric($this->form->Miesiace))

        {
            $this->msgs->addError('Podaj Miesiace :(');
        }


        if($this->form->Oprocentowanie == "") 
        {
            $this->msgs->addError('Nie podano Oprocentowania');
        } elseif(!is_numeric($this->form->Oprocentowanie))

        {
            $this->msgs->addError('Podaj Oprocentowanie :(');
        }


        return ! $this->msgs->isError();
    }
	
	public function process()
    {
        $this->getparams();

        if ($this->validate()) 
        {
            $this->form->Kwota = floatval($this->form->Kwota);
            $this->form->Miesiace = intval($this->form->Miesiace);
            $this->form->Oprocentowanie = floatval($this->form->Oprocentowanie);
            $this->msgs->addInfo('Informacje dodane poprawnie.');

            //$result =round ($form['Kwota']) * ($form['Miesiace']) * ($form['Oprocentowanie']);
            $this->result->result =round (($this->form->Kwota * ($this->form->Miesiace) * ($this->form->Oprocentowanie/100)/12),2);
            //$result =round ($form['Kwota'] * ($form['Miesiace']) * ($form['Oprocentowanie']/100),2);
            $this->msgs->addInfo('Wykonano obliczenia odsetek.');
        }
        $this->generateView();
    }
    public function generateView()
    {
        global $conf, $role;

    $smarty = new Smarty();
    $smarty->assign('conf',$conf);

    //$smarty->assign('app_url',_APP_URL);
    //$smarty->assign('root_path',_ROOT_PATH);
    $smarty->assign('page_title','Jako taki Kalkulator ;)');
    $smarty->assign('page_description','Szablonowanie oparte na bibliotece smarty');
    $smarty->assign('page_header','Szablony smarty wykorzystane w kalkulatorze');

    $smarty->assign('form',$this->form);
    $smarty->assign('role',$role);
    $smarty->assign('result',$this->result);
    $smarty->assign('msgs',$this->msgs);

    $smarty->display($conf->root_path.'/app/calc.html');
    }
}