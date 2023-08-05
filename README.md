# SimplyDi Skeleton (Work in Progress)

**Note**: do not use yet... there may be huge changes as per the necessity

**A Simple and Minimal PHP Skeleton for any Project.**

- use any component you want... for anything
- no lock-ins
- change the project structure if you want
- **do anything... it's just a bare bone that you have to put flesh, skin and clothes on!**

**What you get out of the box**:

- just a project skeleton (readymade project structure)
- a TemplateRenderer interface for rending templates using any engine of your choice (twig or plates or latte or any
  other -> you decide)
- a simple configurations system that can be accessed with `config('command.name')` anywhere from the app or via
  `\SimplyDi\Skeleton\Config\Config` class's `getConfig` method.
- Functions.php containing all common functions that you'd like to access including 'env()' for environment
  vars, `esc()` for escaping vars, `base_url()` etc.
- `tool` file in root that can be used to create controllers at your desired namespace by running `php tool create:
  controller ControllerName --namespace NameSpaceHere` and a few other commands.

**The project does not even offer a debugger since it leaves all those decisions to you regarding what components you
want
to use.**

## Documentation

### REQUIREMENTS

(will be updated soon...)

### QUICKSTART

**Note**: If you want to leave all the component decisions to us and install the best components for http, routing, etc,
run the command in root: `php tool skeleton:setup`.

#### Step 1: Install the skeleton

`composer create-project simplydi/skeleton`

#### Step 2: Decide if you want to use dependency injection.

Yes? No? You decide. It's your app.

**If no...** just remove the file that included **Dependencies.php** and move to the next step.

**If yes...**

Install any dependency injection component via composer. Say, `symfony/dependency-injection`.

`composer require symfony/dependency-injection`

Open `Dependencies.php` and edit it to use the dependency container like below. (Note that you can, if you want, put
your dependencies in `src/Config/Dependencies.yaml` file that will be accessed via $dependencies variable provided in
Dependencies.php).

**WORK IN PROGRESS**