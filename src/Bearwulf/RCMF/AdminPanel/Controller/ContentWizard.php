<?php

/*
 * This file is part of the Rapid Content Management Framework.
 *
 * (c) Wim Ulkeman <wim@wimulkeman.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bearwulf\RCMF\AdminPanel\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * ContentWizard controller for managing content creation and editing.
 */
class ContentWizard
{
    /**
     * Start the content wizard process.
     *
     * @param Request $request The request object
     *
     * @return Response
     */
    public function start(Request $request): Response
    {
        return new Response();
    }

    /**
     * Get the template for content creation.
     *
     * @param Request $request The request object
     *
     * @return Response
     */
    public function getTemplate(Request $request): Response
    {
        return new Response();
    }

    /**
     * Check if a slug is available.
     *
     * @param Request $request The request object
     *
     * @return Response
     */
    public function checkSlug(Request $request): Response
    {
        return new Response();
    }

    /**
     * Save the content to the database.
     *
     * @param Request $request The request object
     *
     * @return Response
     */
    public function saveContent(Request $request): Response
    {
        return new Response();
    }
}
