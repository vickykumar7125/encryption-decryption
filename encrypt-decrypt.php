<?php


class Crypto_Graph{
    private $salt = 'bcRtiSgiJ2ZZlY13ISpAvhj0YBiR3zzxkknNOeF18mRM8LJE0bIu4kKrn6s6rAglibDsB6EAUchf8bMcT6K3RBtgwvX6wQuU6hbeHMUm6M5nWzKH0u39I7vGuylI7vwvl5HTCkT93SEbXY0faM97kUsi16OVDNg92ZroMDxcs4EOJi7nSLEygtYRSOqmCBtFgbCsjgfzE2t5GZ7eswvS653AqM0sicP12FyRwKNCAE0fPPWgfI0OkxlCaMGAEm3C8GArFuJwTh0vQsQ3SG4aRoeX3XLOWEJ9rv5bYbEvSfoywor6ODWYMKsv6OoCVkCfg6L0lF5brme5TmyVDjNjll7l2K2OfsfTra2ftQwiEWOX9l8RJ3ThAGqvLz4XY9OT6XBSLa4RQSo7lPitVbkDyCD119jCJVJiuDnRPX3vox2DtX5f7cgZmcr9QnbLAhnAD8wLkGcvirH45DUxhiJBS9GQApf9LyLcufPSBgxHiEn9YwbrTZDTtn94HQqcCeg78MpvbUV9JUUeWaQqL8LFOhwzoChIFg4zIztYY0H5QWSuksyIPzOlliyCH4oq3UXL6ChS32CupgIwPiXe51TMPEZyLlQkC7EGZthHztqV4C2yH2aUWQceKjvMAe9xkoajnfNQtKhbh1yjNouIs5i0JaFAlq1S62NPQTmx';
    private $iv = 'J2aZCXpx7uDGN03gw4FB5493bWSIcmnvYMoTyJG9RXAPTTnUTcCuSMXoJWIeG8NX43nKIRDsVyn9cgOG1CykWF8b7wJJbckNay56I1JprXRVoWIBWNiCrscL8iDg3JRjb4zn43LQ6ZVqtNZ2fHNPTqsNH3LFK5ZmchIc2cjTp7hCTiRhefwMmjv1i93Qx49PWARsefFhm4YMnS644cypFXqUq0lcDtqCwap2RD40PBxAlV0koH3TK0c0RQxxHO1XTA3oHVRK9gxtyCHMyqo6hsGr8wN8PnTYENyHwAs5qSDL5MhPyfI9yxjZoScW5JmyT2Llx6C7wn78ts12aEt6b0UoLcLeweXkVflTOsGWBZWTLAqq0q3Z39nD3KP4eXkoMwjlQBvUaJOLsZb53VhPDCKJiOwR4KSX58QHltgnG0ClAffoWDhTsx35IzyDloaUEnVEw1kHT82Ko0qiLuTx6Zu14QTr0Q7xwaLOyNmZUkfog8bgF5eNB3LxMUuYTKUeTunD7XQNoLf0KexZkZLiEemSV5sK7lXUAfDqrXWQmb4DbzkAcTEaC6kQcnyEf7P7lXSkrmoEmYkgZHbzCHZepstTDFeXCtujPcz3gU6Eim2WvDZ5OEPWNJ8JxZMqZ46zxW9LPEv2ieUI830CFaO21vuMh0SHL1ZGZu68';
    private $encrypt_method = 'AES-256-CBC';

    // public function to encrypt the string
    public function encrypt($string){
        $output = openssl_encrypt($string, $this -> encrypt_method, Crypto_Graph::HashSalt(), 0, Crypto_Graph::Encryptedsecreate());
        $output = base64_encode($output);
        return $output;
    }

    // public function to decrypt the string
    public function decrypt($string){
        $output = openssl_decrypt(base64_decode($string), $this -> encrypt_method, Crypto_Graph::HashSalt(), 0, Crypto_Graph::Encryptedsecreate());
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
