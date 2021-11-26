<?php
namespace Src\Classes;

class Mail{
    /** @var string */
    private static $subject = null;

    /** @var string */
    private static $message = null;

    /** @var string|array */
    private static $from = null;

    /** @var string|array */
    private static $bcc = null;

    /** @var string */
    private static $charset = 'utf-8';

    /** @var string */
    private static $contentType = 'text/plain';

    /** @var string */
    private static $header = null;

    /**
     * Method informs message subject
     * 
     * @param string
     * 
     * @return \Src\Classes\Mail
     */
    public static function subject(string $subject) : Mail{
        self::$subject = $subject;

        return new static;
    }

    /**
     * Method that informs the email message
     * 
     * @param string|array
     * 
     * @return \Src\Classes\Mail
     */
    public static function message(string $message) : Mail{
        self::$message = $message;

        return new static;
    }

    /**
     * Method that informs who the sender will be
     * 
     * @param string|array
     * 
     * @return \Src\Classes\Mail
     */
    public static function from($from) : Mail{
        self::$from = $from;

        return new static;
    }

    /**
     * Method that tells who will receive a copy of that email
     * 
     * @param string|array
     * 
     * @return \Src\Classes\Mail
     */
    public static function bcc($bcc) : Mail{
        self::$bcc = $bcc;

        return new static;
    }

    /**
     * Method that sets the text encoding type
     * 
     * @param string
     * 
     * @return \Src\Classes\Mail
     */
    public static function charset(string $charset) : Mail{
        self::$charset = $charset;

        return new static;
    }

    /**
     * Method that determines whether text will be interpreted as HTML
     * 
     * @param bool
     * 
     * @return \Src\Classes\Mail
     */
    public static function isHtml(bool $html) : Mail{
        if($html)
            self::$contentType = 'text/html';
        else
            self::$contentType = 'text/plain';

        return new static;
    }

    /**
     * Method that sets the page header
     * 
     * @return void
     */
    private static function setHeader() : void{
        if(is_array(self::$from))
            self::$from = implode(',', self::$from);

        if(is_array(self::$bcc))
            self::$bcc = implode(',', self::$bcc);

        self::$header  = "MIME-Version: 1.0\r\n";
        self::$header .= "Content-Type: " . self::$contentType . "; charset=" . self::$charset . "\r\n";

        if(!empty(self::$bcc))
            self::$header .= "Bcc: " . self::$bcc . "\r\n";

        self::$header .= "From: " . self::$from . "\r\n";
        self::$header .= "X-Mailer: php\r\n";
    }

    /**
     * Method sends the email
     * 
     * @param string
     * 
     * @return bool
     */
    public static function send(string $to) : bool{
        self::setHeader();

        return mail(self::$to, self::$subject, self::$message, self::$header);
    }
}