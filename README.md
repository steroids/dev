# Steroids Dev Repository

Репозиторий предназначен для удобной разработки библиотеки `steroids`.

## Развертывание дев проекта

#### 1. Клонирование репозиториев

Необходимо склонировать все репозитории стероидов в папку `steroids` в корне проекта.

```bash
mkdir -p steroids
git clone https://github.com/steroids/auth
git clone https://github.com/steroids/core
git clone https://github.com/steroids/gii
git clone https://github.com/steroids/react
git clone https://github.com/steroids/react-bootstrap
git clone https://github.com/steroids/swagger
```

### 2. Учим IDE видить импорты `@steroids/..`

1. Создайте директорию "steroids/_npm/@steroids" от корня проекта и поместите в нее ссылки "core" и "bootstrap" на соответствующие директории репозиториев.

```bash
mkdir -p steroids/_npm/@steroids
cd steroids/_npm/@steroids
ln -s ../../react core
ln -s ../../react-bootstrap bootstrap
```

2. Отметьте директорию "_npm" как "Resource Root" и в PhpStorm/WebStorm, чтобы заработала подстветка кода.

- Выделите файл, кликните правой кнопкой по нему
- Выберите "Mark Directory As" -> "Resource Root"

### 3. Конфигурация

- Создайте базу данных `steroids` в MySQL.
- Склонируйте файл `config.sample.php` в `config.php` и настройте в последнем доступ к БД.

```bash
cp config.sample.php config.php
```
