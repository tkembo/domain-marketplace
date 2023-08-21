<?php

add_hook('ClientAreaPage', 1, function($vars) {
    try {
        if (!isset($vars['filename']) || !is_string($vars['filename']) || $vars['filename'] !== 'clientarea') {
            return;
        }

        if (!isset($vars['domains']) || !is_array($vars['domains'])) {
            throw new Exception("Domains array is not set or not valid");
        }

        $userDomains = $vars['domains'];

        foreach ($userDomains as &$domain) {
            $domain['actions'][] = ['label' => 'Sell Domain', 'uri' => 'marketplace.php?action=sell&domain=' . $domain['id']];
            $domain['actions'][] = ['label' => 'Check if for Sale', 'uri' => 'marketplace.php?action=checkforsale&domain=' . $domain['id']];
        }

        $smarty = new Smarty;
        $smarty->assign('domains', $userDomains);
        $smarty->display(__DIR__ . '/templates/domain_actions.tpl');

    } catch (Exception $e) {
        error_log("Error in ClientAreaPage hook: " . $e->getMessage());
    }
});

add_hook('ClientAreaPage', 1, function($vars) {
    try {
        if (!isset($vars['filename']) || !is_string($vars['filename']) || $vars['filename'] !== 'marketplace') {
            return;
        }

        if (!isset($vars['page']) || !is_string($vars['page'])) {
            throw new Exception("Page variable is not set or not valid");
        }

        $templateMap = [
            'user-auctions'   => 'user-auctions.tpl',
            'account-balance' => 'account-balance.tpl',
            'auctions'        => 'auctions.tpl',
            'feedback'        => 'feedback.tpl',
            'view-auction'    => 'view-auctions.tpl',
            'sell-domain'     => 'sell-domain.tpl',
        ];

        if (array_key_exists($vars['page'], $templateMap)) {
            $smarty = new Smarty;
            $smarty->display(__DIR__ . '/templates/' . $templateMap[$vars['page']]);
        } else {
            throw new Exception("Invalid page variable: " . $vars['page']);
        }

    } catch (Exception $e) {
        error_log("Error in ClientAreaPage hook: " . $e->getMessage());
    }
});
