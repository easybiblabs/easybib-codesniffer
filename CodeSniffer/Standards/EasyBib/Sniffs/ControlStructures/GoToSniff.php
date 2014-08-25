<?php
/**
 * This file is part of the easybib-codesniffs package.
 *
 * (c) EasyBib Copyright 2014
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class EasyBib_Sniffs_ControlStructures_GoToSniff
 */
class EasyBib_Sniffs_ControlStructures_GoToSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * @return int[]
     * @see    Tokens.php
     */
    public function register()
    {
        return array(T_GOTO);
    }

    /**
     * Never use goto
     *
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param int                  $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $phpcsFile->addError('Found goto', $stackPtr);
    }
}
