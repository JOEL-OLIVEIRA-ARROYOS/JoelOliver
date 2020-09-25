<?php    

    class EnviarEmail 
    {
        #region "Propriedades"
        private $Contato;
        private $Email;
        private $Mensagem;
        #endregion

        #region "Construtor"
        public function __construct()
        {
            $this->Contato  = "";
            $this->Email    = "";
            $this->Mensagem = "";
        }
        #endregion

        #region "Métodos get's"
        public function getContato()            {  return $this->Contato;           }
        public function getEmail()              {  return $this->Email;             }
        public function getMensagem()           {  return $this->Mensagem;          }
        #endregion

        #region "Métodos set's"
        public function setContato($Contato)    {   $this->Contato  = $Contato;     }
        public function setEmail($Email)        {   $this->Email    = $Email;       }
        public function setMensagem($Mensagem)  {   $this->Mensagem = $Mensagem;    }
        #endregion

        #region "Função para o envio do email"
        public function Enviar()
        {
            if($this->getEmail() != "")
            {
                $mensagemHTML       = " \*\*\*\Hidden\*\*\*\ ";
                $headers            = 'From: ' . addslashes($this->getContato()) . "\r\n";
                $headers            .= 'Return-path: \*\*\*\Hidden\*\*\*\ ' . "\r\n"; 
                $headers            .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
                $emailsender        = " \*\*\*\Hidden\*\*\*\ ";
                $quebra_linha       = "\r\n";
                $assunto            = "Novo contato via site.";
                $emaildestinatario  = "Hidden";

                if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender))
                { 
                    $headers .= "Return-Path: " . $emailsender . $quebra_linha; 
                    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
                }    
            }            
        }
        #endregion
    }    

?>