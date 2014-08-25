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
     *test
     */
    public function useVarDump()
    {
        var_dump("Using logger or XDebug is so much better!");
    }

    public function useGoTo()
    {
        goto http;
    }

    public function usePrintR()
    {
        http://google.com
        print_r("This will end bad!");
    }

    public function useDie()
    {
        //die('here');
        die('here');
    }

    public function useExit()
    {
        //exit();
        exit();
        $str = 'Hello';
    }

    public function useEcho()
    {
        echo "Not IN the code.";
    }

    public function useEval()
    {
        $str = 'Hello';
        eval ('$str = "$str";');
    }

    public function useExec()
    {
        exec('echo "Not in the code! Better to call external scripts"');
    }

    public function useDbQuery()
    {
        $query = "SELECT * FROM MyTable";
    }
}
