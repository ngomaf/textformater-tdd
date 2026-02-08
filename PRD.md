# PRD: Formatador de Frases em PHP (Projeto para Testes Unitários)

## 1. Visão Geral
Desenvolver uma biblioteca PHP para formatação de frases com diferentes regras de formatação, destinada ao aprendizado e prática de testes unitários com PHPUnit.

### 1.1 TDD (Test-Driven Development)
Test-Driven Development: traduzido para português é: Desenvolvimento Orientado por Testes (DOT)

Também pode ser encontrado como:
- Desenvolvimento Guiado por Testes
- Desenvolvimento Dirigido por Testes

A sigla **TDD** permanece a mesma em português, embora o significado seja traduzido. No contexto do PRD anterior, a abordagem recomendada é:

> "Praticar **Desenvolvimento Orientado por Testes (TDD)** - escrever testes primeiro, depois implementar a funcionalidade"

## 2. Objetivos
- Criar uma biblioteca simples para formatação de texto
- Implementar testes unitários abrangentes
- Praticar TDD (Test-Driven Development)
- Demonstrar diferentes tipos de asserts no PHPUnit

## 3. Requisitos Funcionais

### 3.1 Formatador Básico
```php
// RF01: Capitalizar a primeira letra da frase
$formatador->capitalizar("olá mundo"); // "Olá mundo"

// RF02: Converter para maiúsculas
$formatador->maiusculas("olá mundo"); // "OLÁ MUNDO"

// RF03: Converter para minúsculas
$formatador->minusculas("OLÁ MUNDO"); // "olá mundo"
```

### 3.2 Formatador Avançado
```php
// RF04: Formatar como título (cada palavra capitalizada)
$formatador->titulo("o pequeno príncipe"); // "O Pequeno Príncipe"

// RF05: Alternar entre maiúsculas e minúsculas
$formatador->alternar("Olá Mundo"); // "oLÁ mUNDO"

// RF06: Remover espaços extras
$formatador->removerEspacosExtras("  olá    mundo  "); // "olá mundo"

// RF07: Inverter a frase
$formatador->inverter("olá mundo"); // "odnum álo"

// RF08: Contar palavras
$formatador->contarPalavras("olá mundo cruel"); // 3
```

### 3.3 Formatador de Listas
```php
// RF09: Criar lista numerada
$formatador->listaNumerada(["maçã", "banana", "laranja"]);
// "1. maçã\n2. banana\n3. laranja"

// RF10: Criar lista com marcadores
$formatador->listaComMarcadores(["PHP", "Python", "JavaScript"]);
// "- PHP\n- Python\n- JavaScript"
```

## 4. Requisitos Não Funcionais

### 4.1 Técnicos
- PHP 8.2 ou superior
- PHPUnit 10.0 ou superior
- Cobertura de testes mínima: 90%
- PSR-4 para autoloading
- Type hints e strict types

### 4.2 Qualidade
- Código seguindo PSR-12
- Documentação PHPDoc para todos os métodos
- Tratamento de exceções para entradas inválidas
- Validação de parâmetros

## 5. Casos de Teste (Exemplos)

### 5.1 Testes Unitários Básicos
```php
// Teste para capitalização
public function testCapitalizar()
{
    $formatador = new Formatador();
    $this->assertEquals("Olá mundo", $formatador->capitalizar("olá mundo"));
    $this->assertEquals("", $formatador->capitalizar(""));
    $this->assertEquals("A", $formatador->capitalizar("a"));
}

// Teste para remover espaços extras
public function testRemoverEspacosExtras()
{
    $formatador = new Formatador();
    $this->assertEquals("olá mundo", $formatador->removerEspacosExtras("  olá    mundo  "));
    $this->assertEquals("", $formatador->removerEspacosExtras("   "));
}
```

### 5.2 Testes de Exceção
```php
// Teste para entradas inválidas
public function testEntradasInvalidas()
{
    $formatador = new Formatador();
    
    $this->expectException(InvalidArgumentException::class);
    $formatador->capitalizar(null);
    
    $this->expectException(InvalidArgumentException::class);
    $formatador->listaNumerada("não é um array");
}
```

## 6. Estrutura do Projeto

```
formatter-project/
├── src/
│   ├── Formatador.php
│   ├── FormatadorAvancado.php
│   └── FormatadorListas.php
├── tests/
│   ├── Unit/
│   │   ├── FormatadorTest.php
│   │   ├── FormatadorAvancadoTest.php
│   │   └── FormatadorListasTest.php
│   └── bootstrap.php
├── phpunit.xml
├── composer.json
└── README.md
```

## 7. Plano de Implementação

### Fase 1: Configuração (Dia 1)
- Configurar ambiente PHP 8.2
- Instalar PHPUnit via Composer
- Configurar phpunit.xml
- Criar estrutura básica de diretórios

### Fase 2: Implementação Básica (Dias 2-3)
- Criar classe Formatador com métodos básicos
- Implementar testes unitários para cada método
- Praticar TDD: escrever testes primeiro

### Fase 3: Implementação Avançada (Dias 4-5)
- Criar classes avançadas
- Implementar testes com data providers
- Adicionar testes de exceção

### Fase 4: Refinamento (Dia 6)
- Medir cobertura de código
- Refatorar código conforme necessário
- Documentar métodos com PHPDoc

## 8. Critérios de Aceitação

1. ✅ Todos os métodos implementados funcionam corretamente
2. ✅ Cobertura de testes acima de 90%
3. ✅ Código segue PSR-12
4. ✅ Todas as exceções são tratadas
5. ✅ Documentação PHPDoc completa
6. ✅ Testes passam com sucesso
7. ✅ Pode ser instalado via Composer

## 9. Exercícios Adicionais para Prática

1. **Testes com Data Providers**: Criar testes usando `@dataProvider`
2. **Testes de Integração**: Testar combinações de formatação
3. **Mock Objects**: Criar mocks para dependências (se adicionadas)
4. **Testes de Performance**: Verificar eficiência dos métodos
5. **Testes com Strings Unicode**: Testar com caracteres especiais

## 10. Exemplo de Uso Final

```php
require 'vendor/autoload.php';

use App\Formatador;
use App\FormatadorAvancado;

$formatador = new Formatador();
$avancado = new FormatadorAvancado();

echo $formatador->titulo("bem-vindo ao formatador de frases");
// Resultado: "Bem-vindo Ao Formatador De Frases"

echo $avancado->contarPalavras("esta frase tem cinco palavras");
// Resultado: 5
```

Este PRD fornece um projeto completo para praticar testes unitários em PHP, com funcionalidades progressivamente mais complexas e oportunidades para diferentes tipos de testes.