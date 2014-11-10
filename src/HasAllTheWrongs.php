<?php
/**
 * This file is part of the easybib-codesniffs package.
 *
 * (c) EasyBib Copyright 2014
 *
 *For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Test;

/**
 * Class HasAllTheWrongs
 * @package Test
 */
class HasAllTheWrongs
{
    /**
     * var_dump can dump to std_out
     */
    public function useVarDump()
    {
        var_dump("Using logger or XDebug is so much better!");
    }

    /**
     *
     */
    public function useGoTo()
    {
        goto http;
    }

    /**
     * For debugging
     */
    public function usePrintR()
    {
        http://google.com
        print_r("This will end bad!");
    }

    /**
     * For debugging
     */
    public function useDie()
    {
        //die('here');
        die('here');
    }

    /**
     * only outside of classes
     */
    public function useExit()
    {
        //exit();
        exit();
        $str = 'Hello';
    }

    /**
     * For debugging
     */
    public function useEcho()
    {
        echo "Not IN the code.";
    }

    /**
     * Uhhh ...
     */
    public function useEval()
    {
        $str = 'Hello';
        eval ('$str = "$str";');
    }

    /**
     * Not in the code! Better to call external scripts
     */
    public function useExec()
    {
        exec('echo "Not in the code! Better to call external scripts"');
    }

    /**
     * Better use ORM
     */
    public function useDbQuery()
    {
        $query = "SELECT * FROM MyTable";
    }

    /**
     * Empty shows it's hard to get always right
     */
    public function useEmpty()
    {
        empty([]);
    }
}
