<?php
class bank{
  public $accountName;
  public $accountHolder;
  public $balance;
  public $balanceLimit;
  public $atmPassword;
  
  public function __construct($an, $ah, $b,$bl, $ap)
  {
    echo "Alied Bank Pvt Ltd. Thopo Chowk, Mardan<br>";
    $this->accountName = $an;
    $this->accountHolder = $ah;
    $this->balance = $b;
    $this->balanceLimit = $bl;
    $this->atmPassword = $ap;
    // echo 'asd';
  }
  public function deposite($amount){
    if($amount > $this->balanceLimit) {
      echo "Your Account is out of Limit <br>";
    }else{
      echo "You have deposited PKR: ". $this->balance += $amount;
    }
  }
  public function withdraw($amount,$password){
    $currentDate = date('Y-m-d  H:i:s a');
    if ($this->atmPassword == $password) {
      echo "<br>Login Successfully!!<br>";
      if ($this->balance <= $amount) {
        echo "<br>Your account has Low balance which is : <b>". $this->balance."</b>";
      }
      else{
         $this->balance -= $amount;
         echo "<br>You have withdraw Amount PKR: <b>".$amount.
         "</b><br>Date of Transaction : ".$currentDate;
      }
    }
    else {
      echo "<br>You Entered Wrong ATM Pin :(";
      return;
    }

  }
    public function getBalance(){
      echo "<br>Your Remaining Balance PKR: ".$this->balance;
    }

    public function accountInfo($address,$accountNo){
      echo "<br>Account Holder Name : ".$this->accountHolder.
      "<br>Account Holder Address# ",$address.
      "<br>Account# ".$accountNo; 
    }
}
$obj = new bank(400,'ADIL SHAH',50, 1000,4444);
echo $obj->deposite(300);
echo $obj->withdraw(30,4444);
// echo $obj->getBalance();
// echo $obj->accountInfo(strtoupper('mardan'),'012345678');
?>