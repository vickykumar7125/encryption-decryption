<?php


class encrypt_decrypt{
    private $salt = 'Your Encryption Salt Here';
    private $iv = 'Your Encryption Iv';
    private $encrypt_method = 'AES-256-CBC';

    // public function to encrypt the string
    public function encrypt($string){
        $output = openssl_encrypt($string, $this -> encrypt_method, encrypt_decrypt::HashSalt(), 0, encrypt_decrypt::Encryptedsecreate());
        $output = base64_encode($output);
        return $output;
    }

    // public function to decrypt the string
    public function decrypt($string){
        $output = openssl_decrypt(base64_decode($string), $this -> encrypt_method, encrypt_decrypt::HashSalt(), 0, encrypt_decrypt::Encryptedsecreate());
        return $output;
    }

    // public function to encrypt secret with sha-256
    public function Encryptedsecreate(){
        $iv = substr(hash('sha256', $this -> iv), 0, 16);
        return $iv;
    }

    // public function has secret with sha-256
    public function HashSalt(){
        $secreat = hash('sha256', $this -> salt);
        return $secreat;
    }

}
