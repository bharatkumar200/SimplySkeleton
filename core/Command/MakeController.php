<?php

namespace SimplyDi\Skeleton\Command;

use Nette\Utils\FileSystem;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'create:controller', description: 'Describe args behaviors')]
class MakeController extends Command
{
    private string $srcPath;

    public function __construct(string $srcPath)
    {
        $this->srcPath = $srcPath;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDefinition(
            new InputDefinition([
                new InputArgument('controllerName', InputArgument::REQUIRED, 'Name of the Controller class to create.'),
                new InputOption('namespace', null, InputOption::VALUE_OPTIONAL, 'Namespace of the Controller class to create (e.g., App\Controller).'),
            ])
        );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $controllerName = ucfirst($input->getArgument('controllerName')) . 'Controller';
        $controllerNamespace = $input->getOption('namespace');

        if (!$controllerNamespace) {
            $output->writeln("Error: The --namespace option is required.");
            return Command::FAILURE;
        }

        $controllerFilePath = $this->srcPath . str_replace('\\', '/', $controllerNamespace) . '/' . $controllerName . '.php';

        if (file_exists($controllerFilePath)) {
            $output->writeln("Controller already exists at: {$controllerFilePath}");
            return Command::FAILURE;
        }

        $controllerContent = $this->generateControllerContent($controllerNamespace, $controllerName);
        FileSystem::write($controllerFilePath, $controllerContent, 777);

        $output->writeln("Controller created successfully at: {$controllerFilePath}");

        return Command::SUCCESS;
    }

    private function generateControllerContent(string $controllerNamespace, string $controllerName): string
    {
        // You can customize the content of the Controller class as per your requirements.
        return <<<EOD
<?php

namespace $controllerNamespace;

class $controllerName
{
    public function index()
    {
        // Controller logic goes here
        // You can use Symfony Response/Response or any other component to handle requests and responses
        return "Hello World";
    }
}
EOD;
    }
}
