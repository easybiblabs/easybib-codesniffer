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
 * Class EasyBib_Sniffs_Debug_PrintRSniff
 */
class EasyBib_Sniffs_CodeAnalysis_EmptySniff implements PHP_CodeSniffer_Sniff
{

    /**
     * @return int[]
     * @see    Tokens.php
     */
    public function register()
    {
        return array(
            T_EMPTY,
        );
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param int                  $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $phpcsFile->addWarning('Use of empty() is discouraged', $stackPtr);
    }
}
