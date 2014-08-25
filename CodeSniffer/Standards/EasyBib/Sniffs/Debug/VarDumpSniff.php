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
 * Class VarDumpSniff
 * @package CodeSniffer\Standards\EasyBib\Sniffs\Debug
 */
class EasyBib_Sniffs_Debug_VarDumpSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * @return int[]
     * @see    Tokens.php
     */
    public function register()
    {
        return array(
            T_STRING,
        );
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param int                  $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$stackPtr]['content'] == 'var_dump') {
            $phpcsFile->addError('Found var_dump', $stackPtr);
        }
    }
}
