# merkatodo-esp-uniminuto

```mermaid
classDiagram
    class Entity
    class IRepository
    class InMemoryRepository
    class DoctrineRepository
    class View
    class Controller
    class Routes
    class Services
    class App

<<interface>> IRepository
IRepository <|.. InMemoryRepository
IRepository <|.. DoctrineRepository
IRepository --> Entity
Controller ..> IRepository: CRUD data.
Controller ..> View: Renders data.
Routes --> Controller: Maps to Http Request
Services --> Controller: Configures
App *-- Routes
App *-- Services
App ..> Controller: Executes
```
Backend class Diagram

```mermaid
sequenceDiagram
    Client ->> App: Http Request
    App ->> Routes: GetController (Request)
    Routes -->> App: ControllerName
    App ->> Services: CreateController(ControllerName)
    Services -->> App: Controller
    App ->> Controller: Handle request
    Controller ->> IRepository: CRUD data
    IRepository -->> Controller: Results.
    Controller ->> View: Represent Data.
    View -->> Controller: Html/Json.
    Controller ->> Controller: Build Http Response (Html)
    Controller -->> App: Http Response
    App -->> Client:Http Response
```
Backend sequence Diagram

## Project setup

**1. Install Dependencies**

```sh
composer install
```

**2. Create Environment Settings**

Create a new file named `.env` and fill it with appropriate settings, see `.env.example` to know what to put.

## Run project

```sh
php -S localhost:5050
```

You can change `5050` with any other port.
