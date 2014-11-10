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
 * Class EasyBib_Sniffs_Commenting_CommentPublicApiSniff
 */
class EasyBib_Sniffs_Commenting_CommentPublicApiSniff implements PHP_CodeSniffer_Sniff
{

    /**
     * @return int[]
     * @see    Tokens.php
     */
    public function register()
    {
        return array(
            T_PUBLIC,
        );
    }

    /**
     * @param PHP_CodeSniffer_File $phpcsFile
     * @param int                  $stackPtr
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        $commentStackPointer = 3;

        if ($tokens[$stackPtr-2]['type'] == 'T_ABSTRACT') {
            $commentStackPointer += 2;
        }

        if ($tokens[$stackPtr - $commentStackPointer]['type'] !== 'T_DOC_COMMENT') {


            if ($tokens[$stackPtr + 2]['type'] == 'T_FUNCTION' || $tokens[$stackPtr + 3]['type'] == 'T_FUNCTION') {
                $functionName = $tokens[$stackPtr + 4]['content'];
                // exclude test methods
                $testMethods = ['test', 'setUp', 'tearDown'];
                foreach ($testMethods as $testMedName) {
                    if (strpos($functionName, $testMedName) === 0) {
                        return;
                    }
                }

                $phpcsFile->addWarning(
                    sprintf('Public method %s should have a docblock', $functionName),
                    $stackPtr
                );
                return;
            }

            if ($tokens[$stackPtr + 2]['type'] == 'T_VARIABLE' || $tokens[$stackPtr + 3]['type'] == 'T_VARIABLE') {
                $phpcsFile->addWarning(
                    sprintf('Public variable %s should have a docblock', $tokens[$stackPtr + 2]['content']),
                    $stackPtr
                );
            }
        }
    }
}
