# Развертывание dev проекта

#### 1. Клонируем репозиторий boilerplate-react

```
git clone https://github.com/steroids/boilerplate-react
```

Если вы просто хотите разрабатывать на `Steroids` не меняя функционал внутри фреймворка сразу переходите к пункту **3** и **5**.

#### 2. Клонирование репозиториев разделяющих core и view часть

Необходимо склонировать все репозитории `steroids` в папку в корне проекта (`там где лежит boilerplate-react`).

```bash
git clone https://github.com/steroids/react
git clone https://github.com/steroids/react-bootstrap
```

### 3. Установка зависимостей

Для каждого из репозиториев необходимо установить зависимости из package.json. Пример:

```bash
cd react
yarn
```

### 4. Конфигурация репозиториев

-   Переходим в `boilerplate-react/webpack.js`. Это настройки для запуска `webpack` по-умолчанию:

```ts
//boilerplate-react/webpack.js

require('@steroidsjs/webpack').config({
    inlineSvg: true,
    port: 9991,
});
```

-   Добавляем в начало файла `webpack.js` этот код, представляющий собой пути до склонированных репозиториев:

```ts
//boilerplate-react/webpack.js

const path = require('path');

//Пути до src каталога в каждом из репозиториев
const STEROIDS_PATH_CORE = '../react/src';
const STEROIDS_PATH_BOOTSTRAP = '../react-bootstrap/src';
```

-   Добавляем алиасы для репозиториев следующим образом:

```ts
//boilerplate-react/webpack.js

const path = require('path');

//Пути до src каталога в каждом из репозиториев
const STEROIDS_PATH_CORE = '../react/src';
const STEROIDS_PATH_BOOTSTRAP = '../react-bootstrap/src';

require('@steroidsjs/webpack').config({
    port: 9991,
    inlineSvg: true,
    webpack: {
        resolve: {
            alias: {
                //Алиасы используемые для импорта функционала внутри react-boilerplate
                '@steroidsjs/core': path.resolve(__dirname, STEROIDS_PATH_CORE),
                '@steroidsjs/bootstrap': path.resolve(
                    __dirname,
                    STEROIDS_PATH_BOOTSTRAP,
                ),
            },
        },
    },
});
```

### 5. Запуск проекта

-   Для запуска проекта переходим через теминал в репозиторий `react-boilerplate` и выполняем скрипт `yarn watch`:

```bash
cd boilerplate-react
yarn watch
```

-   После команды запустится локальный сервер по адресу указанному в терминале:

```bash
i ｢wds｣: Project is running at http://127.0.0.1:9991/ <--- Адрес сервера
i ｢wds｣: webpack output is served from undefined
i ｢wds｣: Content not from webpack is served from D:\WEBProjects\ReactApps\steroids\boilerplate-react\public
i ｢wds｣: 404s will fallback to /frontend/index.html
```

- Теперь все изменения произведенные в репозиториях react и react-bootstrap будут сразу применяться и отражаться в boilerplate-react.

#### Генерация/обновление документации (typedoc)

```bash
yarn docs
```
