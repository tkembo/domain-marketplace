<main>
    {if $page == 'auctions'}
        {include file=$module_templates_path|cat:"auctions.tpl"}
    {elseif $page == 'sell_domain'}
        {include file=$module_templates_path|cat:"sell-domain.tpl"}
    {elseif $page == 'account_balance'}
        {include file=$module_templates_path|cat:"account-balance.tpl"}
    {elseif $page == 'domain_auctions'}
        {include file=$module_templates_path|cat:"domain_auctions.tpl"}
    {elseif $page == 'feedback'}
        {include file=$module_templates_path|cat:"feedback.tpl"}
    {elseif $page == 'user_auctions'}
        {include file=$module_templates_path|cat:"user-auctions.tpl"}
    {elseif $page == 'view_auction'}
        {include file=$module_templates_path|cat:"view-auction.tpl"}
    {else}
        <p>No content available at this time.</p>
    {/if}
</main>
