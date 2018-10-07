<?php
use app\models\Country;

//obtem todas as linhas da tabela country e ordena-as pelo "name"
$countries = Country::find()
    ->orderBy('name')
    ->all();

//obtem as linhas cuja chave-primaria é "US"
$country = Country::findOne('US');

//exibe "United States"
echo $country->name;

//modifica o nome do país para "U.S.A." e salva-o no banco de dados
$country->name = 'U.S.A.';
$country->save();