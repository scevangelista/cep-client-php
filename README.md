## CEP-Cliente-PHP
Classe de comunicação com a API de CEP

[Link da API](https://github.com/scevangelista/CEP)  


## Exemplo de uso:
```
require('CEP.php');

$cep = new CEP();
$paises = $cep->getAllCountries();

print_r($paises);
```

Veja mais exemplos no arquivo [index.php](https://github.com/scevangelista/CEP-Cliente-PHP/blob/main/index.php)
