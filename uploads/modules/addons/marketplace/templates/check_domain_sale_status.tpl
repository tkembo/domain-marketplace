<div class="domain-sale-status">
    <h2>Domain Sale Status</h2>
    {if $message.status == 'info'}
        <p>{$message.message}</p>
    {else}
        <p class="error-message">{$message.message}</p>
    {/if}
    <a href="clientarea.php">Back to My Domains</a>
</div>
