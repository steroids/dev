# Steroids Dev Repository

Репозиторий предназначен для удобной разработки библиотеки `steroids`.


## Развертывание дев проекта

#### 1. Клонируем текущий репозиторий

```
git clone https://github.com/steroids/dev
```

#### 2. Клонирование репозиториев

Необходимо склонировать все репозитории стероидов в папку `steroids` в корне проекта.

```bash
mkdir -p steroids
git clone https://github.com/steroids/auth
git clone https://github.com/steroids/billing
git clone https://github.com/steroids/core
git clone https://github.com/steroids/cron
git clone https://github.com/steroids/file
git clone https://github.com/steroids/gii
git clone https://github.com/steroids/notifier
git clone https://github.com/steroids/react
git clone https://github.com/steroids/react-admin
git clone https://github.com/steroids/react-bootstrap
git clone https://github.com/steroids/react-native
git clone https://github.com/steroids/react-webpack
```

### 3. Конфигурация

- Создайте базу данных `steroids` в MySQL.
- Склонируйте файл `config.sample.php` в `config.php` и настройте в последнем доступ к БД.

```bash
cp config.sample.php config.php
```


## Генерация/обновление документации (typedoc)

```sh
yarn docs
```

