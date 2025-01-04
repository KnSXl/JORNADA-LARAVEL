# Aula 11 - Criando atalho para o comando Sail

Foi ensinado a criar um atalho para usar o comando `./vendor/bin/sail`

## Passos:

### Copiar esse código:
```
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```

### Edite o arquivo `.bashrc`:
```
nano ~/.bashrc
```

### Cole este código `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'` na primeira linha do arquivo `.bashrc` e salve. Pronto, o atalho foi criado com sucesso. Teste em um projeto Laravel Sail.