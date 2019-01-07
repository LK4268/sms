<?php
interface DriverInterface
{
    /**
     * String or Array of recipients' numbers.
     *
     * @param $numbers
     * @return mixed
     */
    public function to($numbers);

    /**
     * Set text message body.
     *
     * @param $message
     * @return mixed
     */
    public function message($message);

    /**
     * Send the message.
     *
     * @param $message
     * @return mixed
     */
    public function send($message);
}
