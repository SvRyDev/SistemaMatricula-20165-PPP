<?php
class ConfigModel
{
    private $configPath = '../config/config.json';

    // Leer datos de configuración
    public function getConfig()
    {
        if (file_exists($this->configPath)) {
            $json = file_get_contents($this->configPath);
            return json_decode($json, true);
        }
        return [];
    }

    // Guardar datos de configuración
    public function saveConfig($newConfigData)
    {
        // Leer el archivo JSON actual
        $currentConfigData = [];
        if (file_exists($this->configPath)) {
            $jsonContent = file_get_contents($this->configPath);
            $currentConfigData = json_decode($jsonContent, true);
        }

        // Combinar los datos existentes con los nuevos datos
        $updatedConfigData = array_merge($currentConfigData, $newConfigData);

        // Guardar el archivo JSON actualizado
        $json = json_encode($updatedConfigData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($this->configPath, $json);
    }
}
