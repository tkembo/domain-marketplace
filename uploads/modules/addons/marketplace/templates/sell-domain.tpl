<!-- sell-domain.tpl -->

<div class="sell-domain-container">
    <h2>Sell Domain</h2>

    {if $message.status == 'success'}
        <div class="alert alert-success">
            {$message.message}
        </div>
    {else}
        <div class="alert alert-danger">
            {$message.message}
        </div>
    {/if}

    <div class="actions">
        <a href="marketplace.php" class="btn btn-primary">Back to Marketplace</a>
    </div>
</div>

<style>
    .sell-domain-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .actions {
        text-align: center;
    }

    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        border: 1px solid transparent;
        padding: 6px 12px;
        border-radius: 4px;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-primary:hover {
        background-color: #286090;
        border-color: #204d74;
    }
</style>
