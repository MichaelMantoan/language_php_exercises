<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author cristiano
 */
interface DbManagerInterface {

    public function read();

    public function write();

    public function setContent($param);
}
