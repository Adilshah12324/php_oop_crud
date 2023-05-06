<?php
class bank{
  public $accountName;
  public $accountHolder;
  public $balance;
  
  public function __construct($an, $ah, $b)
  {
    $this->accountName = $an;
    $this->accountHolder = $ah;
    $this->balance = $b;
    // echo 'asd';
  }
  public function deposite($amount){
    echo "You have deposited PKR:". $this->balance += $amount;
  }
  public function withdraw($amount){
    if ($this->balance <= $amount) {
      echo "<br> Your account has Low balance which is : ". $this->balance;
    }
    else{
       $this->balance -= $amount;
       echo "<br>You have withdraw amount PKR: ".$amount;
    }
  }
    public function getBalance(){
      echo "<br>Your Remaining Balance is PKR: ".$this->balance;
    }

    public function accountInfo($address){
      echo "<br>Account Holder Name is : ".$this->accountHolder.
      "<br>Account Holder Address# ",$address; 
    }
}
$obj = new bank(400,'ADIL SHAH',50);
echo $obj->deposite(300);
echo $obj->withdraw(300);
echo $obj->getBalance();
echo $obj->accountInfo(strtoupper('mardan'));
?>