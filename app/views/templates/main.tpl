<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
        integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous"> 
    
    {block name=head_style}
        <link rel="stylesheet" href="{$conf->app_url}/css/style.css">
    {/block}
</head>

<body>

    <header>
        <h2>Rental</h2>
            <nav class="navigation">
                <a href="{$conf->action_root}loginShow">Home</a>
                <a href="{$conf->action_root}rentList">Rent</a>
                <a href="{$conf->action_root}contact">Contact</a>
            </nav>
            {if count($conf->roles)>0}
                <a href="{$conf->action_root}logout"><button class="btnLogin-popup">Logout</button></a>
            {else}    
                <a href="{$conf->action_root}loginShow" class"btnLogin-popup"><button class="btnLogin-popup">Login</button></a>
            {/if}
            
    </header>

{block name=top} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
    <ul>
        {foreach $msgs->getMessages() as $msg}
        {strip}
        <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
        {/strip}
        {/foreach}
    </ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}

</body>

</html>