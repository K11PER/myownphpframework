<?php


function app(): \FrwCore\Application
{
    return \FrwCore\Application::$app;
}


function request(): \FrwCore\Request
{
    return app()->request;
}