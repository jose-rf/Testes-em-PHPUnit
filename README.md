# 🧪 Testes com PHPUnit – Função `calcularDesconto()`

## 📁 Estrutura de Arquivos

php/
├── composer.json
├── composer.lock
├── funcoes.php
├── funcoesTest.php
└── vendor/ (gerado pelo Composer)


---

## 📌 Objetivo

Este projeto tem como objetivo testar a função `calcularDesconto($valorCompra, $categoriaCliente)` utilizando **PHPUnit**.

A função retorna o valor com desconto de acordo com a categoria do cliente:

- `'premium'` → 20%
- `'regular'` → 10%
- `'novo'` → 5%
- Qualquer outra categoria → 0%
- Compras com valor menor ou igual a 0 retornam `"Valor inválido"`

---

## 🔍 Análise de Código (Caixa Branca)

### ✅ Caminhos Lógicos

1. `valorCompra <= 0` → retorna `"Valor inválido"`
2. categoria `'premium'` → 20%
3. categoria `'regular'` → 10%
4. categoria `'novo'` → 5%
5. qualquer outra categoria → 0%

---

## 🧪 Casos de Teste

Os seguintes testes foram implementados na classe `calcularDescontoTest.php`:

| Entrada                        | Saída Esperada     | Tipo de Teste               |
|-------------------------------|---------------------|-----------------------------|
| `(-50, 'regular')`            | `"Valor inválido"`  | Valor limite / Validação    |
| `(100, 'premium')`            | `80.0`              | Caixa branca / Condição     |
| `(200, 'regular')`            | `180.0`             | Caixa branca / Condição     |
| `(300, 'novo')`               | `285.0`             | Caixa branca / Condição     |
| `(400, 'vip')`                | `400.0`             | Categoria inválida / Extra  |

---

## ▶️ Execução dos Testes

### 1. Instalar dependências

Certifique-se de estar na pasta do projeto e execute:

```bash
composer install

2. Rodar os testes
vendor\bin\phpunit calcularDescontoTest.php

✅ Resultado
OK (5 tests, 5 assertions)
![image](https://github.com/user-attachments/assets/bdbd030f-cc7f-417b-a4ef-79f1b7beba7b)
