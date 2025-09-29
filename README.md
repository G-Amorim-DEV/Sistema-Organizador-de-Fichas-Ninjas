Perfeito 👌 Vou montar o **README completo** já com exemplos retirados dos seus arquivos `cards.php`, `functions.php` e `header.php`.
Assim, quem acessar o repositório vai entender **como o sistema funciona na prática**.

---

```markdown
# 🥷 Sistema Organizador de Fichas Ninjas

Um sistema simples e prático para organizar fichas de personagens ninjas.  
Projeto desenvolvido por **Guilherme Amorim** (conhecido como **Amorim**).  

🔗 GitHub: [G-Amorim-DEV](https://github.com/G-Amorim-DEV)

---

## 📖 Sobre o Projeto

Este sistema foi criado para facilitar a **organização e visualização de fichas ninjas** em um ambiente web.  
Ele foi desenvolvido utilizando apenas **PHP puro** rodando no **Apache do XAMPP** — sem MySQL ou qualquer outro banco de dados.  

As fichas são gerenciadas diretamente pelos arquivos PHP, e exibidas em formato de **cards visuais**.

---

## ⚙️ Tecnologias Utilizadas

- **PHP** → lógica principal do sistema  
- **HTML5 / CSS3** → estrutura e estilo da aplicação  
- **Apache (XAMPP)** → servidor local para rodar o projeto  
- ❌ **MySQL não foi utilizado**

---

## 📂 Estrutura de Arquivos

```

📦 Sistema-Organizador-Fichas-Ninjas
┣ 📜 header.php      # Cabeçalho e layout inicial
┣ 📜 functions.php   # Funções PHP para manipulação das fichas
┣ 📜 cards.php       # Exibição dos cards das fichas
┗ 📜 index.php       # (opcional) ponto de entrada

````

### 🔹 `header.php`
Contém o **layout inicial da página**, incluindo estilos, título e navegação.  
Exemplo simplificado:

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Organizador de Fichas Ninjas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sistema Organizador de Fichas Ninjas</h1>
    </header>
````

---

### 🔹 `functions.php`

Arquivo onde estão as **funções responsáveis por organizar e estruturar as fichas**.
Exemplo de função (ilustrativo):

```php
<?php
function criarFicha($nome, $clan, $habilidade) {
    return [
        'nome' => $nome,
        'clan' => $clan,
        'habilidade' => $habilidade
    ];
}
```

---

### 🔹 `cards.php`

Responsável por **exibir as fichas em formato de card**.
Ele utiliza as funções de `functions.php` para renderizar os dados.

Exemplo:

```php
<?php
include 'functions.php';

$fichas = [
    criarFicha("Naruto Uzumaki", "Uzumaki", "Rasengan"),
    criarFicha("Sasuke Uchiha", "Uchiha", "Chidori"),
    criarFicha("Sakura Haruno", "Haruno", "Força Sobrehumana")
];

foreach ($fichas as $ficha) {
    echo "
    <div class='card'>
        <h2>{$ficha['nome']}</h2>
        <p><b>Clã:</b> {$ficha['clan']}</p>
        <p><b>Habilidade:</b> {$ficha['habilidade']}</p>
    </div>
    ";
}
```

Esse código gera cards automáticos no navegador.

---

## 🚀 Como Executar

1. Baixe e instale o [XAMPP](https://www.apachefriends.org/).
2. Copie a pasta do projeto para o diretório:

   ```
   C:\xampp\htdocs\
   ```
3. Inicie o **Apache** pelo painel do XAMPP.
4. Acesse no navegador:

   ```
   http://localhost/Sistema-Organizador-Fichas-Ninjas/
   ```

---

## 🛠️ Como o Código Foi Elaborado

* O projeto foi dividido em **arquivos modulares**:

  * `header.php` cuida apenas da **estrutura visual**.
  * `functions.php` centraliza todas as **funções de manipulação**.
  * `cards.php` faz a **exibição dinâmica** das fichas em HTML.

* O sistema não depende de banco de dados.
  Em vez disso, os personagens são criados e organizados diretamente em **arrays PHP**, o que torna o código simples e leve.

* O estilo dos **cards** pode ser customizado facilmente via CSS.

---

## ✨ Possíveis Melhorias Futuras

* Criar **formulário de cadastro** para adicionar novas fichas direto pelo navegador.
* Implementar **edição e exclusão de fichas**.
* Salvar e carregar fichas em um arquivo **JSON** (mantendo a independência de banco de dados).
* Adicionar um **filtro de busca** para encontrar fichas rapidamente.

---

## 👨‍💻 Autor

**Guilherme Amorim (Amorim)**
🔗 GitHub: [https://github.com/G-Amorim-DEV](https://github.com/G-Amorim-DEV)

---

