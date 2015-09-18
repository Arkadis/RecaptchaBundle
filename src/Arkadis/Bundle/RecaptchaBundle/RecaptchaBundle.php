<?php
/**
 * This file is part of the ArkadisRecaptchaBundle package.
 *
 * (c) Pablo Lozano
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Arkadis\Bundle\RecaptchaBundle;

use Arkadis\Bundle\RecaptchaBundle\DependencyInjection\Compiler\FormPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RecaptchaBundle extends Bundle
{
    /**
     * Build this
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new FormPass());
    }
}
