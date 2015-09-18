<?php
/**
 * This file is part of the ArkadisRecaptchaBundle package.
 *
 * (c) Pablo Lozano
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arkadis\Bundle\RecaptchaBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Recaptcha extends Constraint
{
    public $message = 'Invalid captcha.';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'recaptcha';
    }
}
