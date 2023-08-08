<?php

add_hook('ClientAreaPage', 1, function($vars) {
    $requestUri = $_SERVER['REQUEST_URI'];

    error_log("ClientAreaPage Hook triggered. Request URI: " . $requestUri);

    if (strpos($requestUri, '/marketplace') !== false) {
        // Add logic here if you need to get data for your view
        $domainsForSale = get_domains_for_sale();

        // Checking if a sell action is requested
        if (strpos($requestUri, 'action=sell') !== false) {
          // Check if user is authenticated
          if (!isset($_SESSION['uid'])) {
              // Not authenticated, redirect to login
              header('Location: login.php');
              exit;
          }
            // Get domain id from the request
            $domainId = $_GET['domain'];
            // Check if user is the owner of the domain
            $userId = $_SESSION['uid'];
            if (!is_user_owner_of_domain($userId, $domainId)) {
                // Not the owner, return an error
                die("You are not authorized to perform this action.");
            }
            // Set domain for sale
            set_domain_for_sale($domainId);
        }

        return [
            'templatefile' => 'addons/marketplace', // Path to the template file
            'breadcrumb' => [['path' => 'marketplace.php', 'label' => 'Marketplace']], // Breadcrumb navigation
            // Add any additional variables you want to pass to your view
            'vars' => ['domainsForSale' => $domainsForSale], // Pass the domains to the view
        ];
    }
});

// Hook to add buttons for selling domains or checking domains for sale on domain listing pages
add_hook('ClientAreaPage', 1, function($vars) {
    $filename = $vars['filename'];

    // Check if the page is related to domains
    if ($filename == 'clientarea') {
        $userDomains = $vars['domains']; // Get the user's domains

        // Iterate through the domains and add custom actions
        foreach ($userDomains as &$domain) {
            // Add a button for selling the domain
            $domain['actions'][] = [
                'label' => 'Sell Domain',
                'uri' => 'marketplace.php?action=sell&domain=' . $domain['id'],
            ];

            // Add a button to check if the domain is for sale
            $domain['actions'][] = [
                'label' => 'Check if for Sale',
                'uri' => 'marketplace.php?action=checkforsale&domain=' . $domain['id'],
            ];
        }

        // Include the domain_actions.tpl file
        $templateFile = __DIR__ . '/templates/domain_actions.tpl';
        if (file_exists($templateFile)) {
            $smarty = new Smarty;
            $smarty->assign('domains', $userDomains);
            $smarty->display($templateFile);
        } else {
            error_log('Template file not found: ' . $templateFile);
        }
    }
});

// hook for user-auctions.tpl
// this template is meant to display a list of auctions created by the currently logged-in user
// This would be the controller for the "user-auctions" page
add_hook('ClientAreaPage', 1, function($vars) {
    $requestUri = $_SERVER['REQUEST_URI'];

    if (strpos($requestUri, '/user-auctions') !== false) {
        // Check if user is authenticated
        if (!isset($_SESSION['uid'])) {
            // Redirect to login page if user is not authenticated
            header('Location: /login.php');
            exit;
        }

        // Assuming you have a function `get_user_auctions` to fetch the auctions of the current user
        $userAuctions = get_user_auctions($_SESSION['uid']);

        return [
            'templatefile' => 'addons/user-auctions', // Path to the template file
            'breadcrumb' => [['path' => 'user-auctions.php', 'label' => 'User Auctions']], // Breadcrumb navigation
            'vars' => ['userAuctions' => $userAuctions], // Pass the auctions to the view
        ];
    }
});

// Hook for account-balance.tpl
// this template displays the account balance and transaction history of the logged-in user
add_hook('ClientAreaPage', 1, function($vars) {
    if (strpos($_SERVER['REQUEST_URI'], '/account-balance') !== false) {
        if (!isset($_SESSION['uid'])) {
            header('Location: /login.php');
            exit;
        }

        // Fetch account balance and transaction history for the logged-in user
        // Placeholder functions for now
        $accountBalance = fetch_account_balance($_SESSION['uid']);
        $transactionHistory = fetch_transaction_history($_SESSION['uid']);

        return [
            'templatefile' => 'addons/account-balance',
            'breadcrumb' => [['path' => 'account-balance.php', 'label' => 'Account Balance']],
            'vars' => [
                'accountBalance' => $accountBalance,
                'transactionHistory' => $transactionHistory
            ],
        ];
    }
});

// Hook for auctions.tpl
//  this template lists all available auctions
add_hook('ClientAreaPage', 1, function($vars) {
    if (strpos($_SERVER['REQUEST_URI'], '/auctions') !== false) {
        $auctions = marketplace_search_auctions([]);  // Fetch all auctions

        return [
            'templatefile' => 'addons/auctions',
            'breadcrumb' => [['path' => 'auctions.php', 'label' => 'Auctions']],
            'vars' => ['auctions' => $auctions],
        ];
    }
});


// hook for feedback.tpl
// this template displays feedback for a specific auction
add_hook('ClientAreaPage', 1, function($vars) {
    if (strpos($_SERVER['REQUEST_URI'], '/feedback') !== false) {
        $auctionId = $_GET['auction_id'] ?? null;

        if (!$auctionId) {
            // Handle error, e.g., redirect to a different page or display an error message
            exit;
        }

        $feedback = marketplace_user_feedback($auctionId, $_SESSION['uid'], null, null);

        return [
            'templatefile' => 'addons/feedback',
            'breadcrumb' => [['path' => 'feedback.php', 'label' => 'Feedback']],
            'vars' => ['feedback' => $feedback],
        ];
    }
});

// hook for view-auctions.tpl
// this template provides a detailed view of a specific auction
add_hook('ClientAreaPage', 1, function($vars) {
    if (strpos($_SERVER['REQUEST_URI'], '/view-auction') !== false) {
        $auctionId = $_GET['auction_id'] ?? null;

        if (!$auctionId) {
            // Handle error, e.g., redirect to a different page or display an error message
            exit;
        }

        $auctionDetails = marketplace_view_auction($auctionId);

        return [
            'templatefile' => 'addons/view-auctions',
            'breadcrumb' => [['path' => 'view-auctions.php', 'label' => 'View Auction']],
            'vars' => ['auctionDetails' => $auctionDetails],
        ];
    }
});
