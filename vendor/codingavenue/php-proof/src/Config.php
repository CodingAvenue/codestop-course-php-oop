<?php

namespace CodingAvenue\Proof;

/**
 * Configuration class Used by the Code and ProofRunner class.
 */
class Config
{
    /** @var codeFilepath   string  The path to the file where the User code will be save which is used to run against the proof file. */
    private $codeFilePath;

    /** @var verbose        bool    The verbose value of the config, used by the ProofRunner command. */
    private $verbose = false;

    /** @var answerDir      string  The base directory where test answers are located. This will be used to test proof file locally */
    private $answerDir;

    /** @var proofDir       string  The base directory where proof files are located. */
    private $proofDir;

    /** @var defaultConfiguration bool If this config is using the default configuration or not. */
    private $defaultConfiguration;

    /** @var isSandboxMode bool Checks the environment variable PROOF_LIBRARY_MODE if it's equal to local, true if it's NOT, false otherwise. */
    private $sandboxMode;

    /** @var defaultSettings - The default configuration settings. This settings not set on the proof.json file will use the default value. */
    private $defaultSettings = array(
        "codeFilePath" => "/code",
        "verbose" => false,
        "answerDir" => "",
        "proofDir" => "",
        "binPath" => "vendor/bin",
        "suppressCodingConventionErrors" => false,
        "suppressMessDetectionErrors" => false
    );

    /**
     * Constructor
     * The default settings will be used and can be overwritten by creating a proof.json file
     * at the current working directory
     * Checks the environment variable PROOF_LIBRARY_MODE if set to local ( set by the proof-runner script )
     * If it's set and is set to 'local' then the proof.json can be used to overwrite the default settings
     * Otherwise the default settings will always be used.
     */
    public function __construct(string $codePath)
    {
        $configFile = realpath('proof.json') ?: null;
        $this->sandboxMode = getenv("PROOF_LIBRARY_MODE") === 'local' ? false : true;

        if ($configFile && file_exists($configFile)) {
            $config = json_decode(file_get_contents($configFile), true);
            $config = array_merge($this->defaultSettings, $config);
            $this->loadConfiguration($config, $codePath);

            $this->defaultConfiguration = false;
        }
        else {
            $config = $this->defaultSettings;
            $this->loadConfiguration($config, $codePath);
            
            $this->defaultConfiguration = true;
        }
    }

    /**
     * Uses the configuration settings
     *
     * @param array $config the settings to be used.
     */
    public function loadConfiguration($config, $codePath)
    {
        $this->codeFilePath = $codePath;
        $this->verbose = $config['verbose'];
        $this->answerDir = $this->sandboxMode ? $this->defaultSettings['answerDir'] : $config['answerDir'];
        $this->proofDir = $this->sandboxMode ? $this->defaultSettings['proofDir'] : $config['proofDir'];
        $this->binPath = $config['binPath'];
        $this->suppressCodingConventionErrors = $config['suppressCodingConventionErrors'];
        $this->suppressMessDetectionErrors = $config['suppressMessDetectionErrors'];
    }

    /**
     * Returns the path to the file of the user answer
     *
     * @return string The path to the user answer file.
     */
    public function getCodeFilePath()
    {
        return $this->codeFilePath;
    }

    /**
     * Returns true if the config is set to isVerbose
     *
     * @return bool true if verbose is set to true, false otherwise
     */
    public function isVerbose()
    {
        return $this->verbose;
    }

    /**
     * Returns the answer base directory where all test answers are saved
     *
     * @return string, the base directory of the test answers
     */
    public function getAnswerDir()
    {
        return $this->answerDir;
    }

    /**
     * Returns the proof base directory
     *
     * @return string, the base directory of all proof files.
     */
    public function getProofDir()
    {
        return $this->proofDir;
    }

    /**
     * Returns true if it's using the default configuration settings
     *
     * @return bool, true if the default configuration settings is used, false otherwise.
     */
    public function isDefaultConfiguration()
    {
        return $this->defaultConfiguration;
    }

    public function getBinPath()
    {
        return $this->binPath;
    }

    public function isSandboxMode()
    {
        return $this->sandboxMode;
    }

    public function isSuppressMessDetectionErrors()
    {
        return $this->suppressMessDetectionErrors;
    }

    public function isSuppressCodingConventionErrors()
    {
        return $this->suppressCodingConventionErrors;
    }
}
