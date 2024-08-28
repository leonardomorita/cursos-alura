# Observações

## Ferramentas
- PHP UNIT: Rodar testes;
- PHP CS (CODE SNIFFER): Verificar padrões de código;
- PHP PHAN: Executar uma análise estática da sintaxe do código.

## Comandos
```sh
.\vendor\bin\phpunit <arquivo-teste.php>
```
```sh
.\vendor\bin\phpcs --standard=PSR12 src\
```
```sh
.\vendor\bin\phan --allow-polyfill-parser
```
