<?php
/**
 * SiContamos Sitio Web - CLASE
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package SiContamosSitioWeb
 */

namespace DIRECTORIO;

/**
 * Clase CLASE
 */
class CLASE extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                     = 'Título';
        $this->autor                      = 'guivaloz'; // Puede ser un arreglo de textos
        $this->fecha                      = '2017-00-00T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'archivo'; // En minúsculas, sin espacios, use guiones, letras y números
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Descripción.';
        $this->claves                     = 'Clave1, Clave2, Clave3';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/DIRECTORIO/CLASE.md';
        // Para el Organizador
        $this->categorias                 = array('Categoria1', 'Categoria2', 'Categoria3');
    } // constructor

} // Clase CLASE

?>
