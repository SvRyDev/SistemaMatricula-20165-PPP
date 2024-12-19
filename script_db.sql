/* Batabase: db_sistema_matricula */
CREATE TABLE `modalidad` (
  `id_modalidad` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(10) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `forma` (
  `id_forma` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(50),
  `num_caracteres` integer,
  `estado` boolean DEFAULT true
);

CREATE TABLE `estado_civil` (
  `id_estado_civil` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `actividad_laboral` (
  `id_actividad_laboral` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `sexo` (
  `id_sexo` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50)
);

CREATE TABLE `situacion_matricula` (
  `id_situacion_matricula` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50),
  `estado` boolean DEFAULT true
);

CREATE TABLE `situacion_final_matricula` (
  `id_sit_final_matricula` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5),
  `descripcion` varchar(50),
  `estado` boolean DEFAULT true
);

CREATE TABLE `estado_matricula` (
  `id_estado_matricula` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(10),
  `descripcion` varchar(50)
);

CREATE TABLE `pais` (
  `id_pais` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(3) UNIQUE NOT NULL,
  `nombre` varchar(50),
  `estado` boolean DEFAULT true
);

CREATE TABLE `seccion` (
  `id_seccion` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo_seccion` char(1) NOT NULL,
  `id_grado` integer NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `grado` (
  `id_grado` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre_grado` varchar(30) NOT NULL,
  `id_nivel` integer NOT NULL
);

CREATE TABLE `nivel` (
  `id_nivel` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `nombre_nivel` varchar(40) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `turno` (
  `id_turno` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `nombre_turno` varchar(40) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `lengua` (
  `id_lengua` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `escolaridad` (
  `id_escolaridad` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `discapacidad` (
  `id_discapacidad` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `tipo_sangre` (
  `id_tipo_sangre` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `usuario` (
  `id_usuario` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre_usuario` varchar(50) UNIQUE NOT NULL,
  `clave` varchar(255) UNIQUE NOT NULL,
  `id_rol` integer NOT NULL,
  `estado` boolean DEFAULT true
);

CREATE TABLE `rol` (
  `id_rol` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5) UNIQUE NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `permisos` varchar(255),
  `estado` boolean DEFAULT true
);

CREATE TABLE `estudiante` (
  `id_estudiante` integer PRIMARY KEY AUTO_INCREMENT,
  `id_tipo_documento` integer COMMENT 'Solo DNI, CE y otros',
  `numero_documento` varchar(11),
  `apellido_paterno` varchar(50),
  `apellido_materno` varchar(50),
  `nombres` varchar(100),
  `id_sexo` integer,
  `id_estado_civil` integer,
  `nacimiento_registrado` boolean COMMENT 'Sí o No',
  `fecha_nacimiento` date COMMENT 'Concidera, día, mes y año',
  `id_pais` integer,
  `departamento` varchar(50),
  `provincia` varchar(50),
  `distrito` varchar(50),
  `lengua_materna` integer,
  `segunda_lengua` integer,
  `religion` varchar(100),
  `numero_hermanos` integer,
  `lugar_ocupacion` varchar(50),
  `id_tipo_discapacidad` integer,
  `certificado_discapacidad` boolean COMMENT 'Sí o No',
  `alergias` text,
  `experiencias_traumaticas` text,
  `id_tipo_sangre` integer,
  `id_padre` integer,
  `id_madre` integer,
  `esta_matriculado` boolean DEFAULT false,
  `estado` boolean DEFAULT true
);

CREATE TABLE `estudiante_enfermedad` (
  `enfermedad_id` integer PRIMARY KEY AUTO_INCREMENT,
  `estudiante_id` integer,
  `edad` integer,
  `descripcion` varchar(100)
);

CREATE TABLE `estudiante_vacuna` (
  `vacuna_id` integer PRIMARY KEY AUTO_INCREMENT,
  `estudiante_id` integer,
  `edad` integer,
  `descripcion` varchar(100)
);

CREATE TABLE `padre` (
  `id_padre` integer PRIMARY KEY AUTO_INCREMENT,
  `apellido_paterno` varchar(150),
  `apellido_materno` varchar(150),
  `nombres` varchar(150),
  `vive` boolean,
  `fecha_nacimiento` date,
  `id_escolaridad` integer,
  `ocupacion` varchar(250) COMMENT 'Especificar Trabajo',
  `vive_con_estudiante` boolean,
  `religion` varchar(100)
);

CREATE TABLE `madre` (
  `id_madre` integer PRIMARY KEY AUTO_INCREMENT,
  `apellido_paterno` varchar(150),
  `apellido_materno` varchar(150),
  `nombres` varchar(150),
  `vive` boolean,
  `fecha_nacimiento` date,
  `id_escolaridad` integer,
  `ocupacion` varchar(250) COMMENT 'Especificar Trabajo',
  `vive_con_estudiante` boolean,
  `religion` varchar(100)
);

CREATE TABLE `periodo_anual` (
  `id_periodo_anual` integer PRIMARY KEY AUTO_INCREMENT,
  `nombre_año` char(4),
  `matricula_activa` boolean DEFAULT false,
  `aforo` integer
);

CREATE TABLE `domicilio_estudiante` (
  `domicilio_id` integer PRIMARY KEY AUTO_INCREMENT,
  `estudiante_id` integer,
  `id_periodo_anual` integer,
  `direccion` varchar(255),
  `lugar` varchar(150),
  `departamento` varchar(150),
  `provincia` varchar(150),
  `distrito` varchar(150),
  `telefono` varchar(9)
);

CREATE TABLE `situacion_laboral_estudiante` (
  `situacion_id` integer PRIMARY KEY AUTO_INCREMENT,
  `estudiante_id` integer,
  `anio_laboro` char(4),
  `id_actividad_laboral` integer,
  `edad` integer,
  `tipo_actividad` varchar(250),
  `detalles` text,
  `horas_semanales` integer
);

CREATE TABLE `matricula` (
  `id_matricula` integer PRIMARY KEY AUTO_INCREMENT,
  `id_estudiante` integer,
  `id_apoderado` integer,
  `id_periodo_anual` integer,
  `vive_padre` boolean,
  `vive_madre` boolean,
  `parentesco_estudiante` varchar(255),
  `id_usuario` integer,
  `id_situacion_matricula` integer,
  `fecha_matricula` datetime,
  `fecha_actualizacion` datetime,
  `fecha_retiro` datetime,
  `nombre_IE` varchar(150),
  `codigo_modular` varchar(15),
  `instancia_ugel` varchar(220),
  `id_seccion` integer,
  `id_turno` integer,
  `id_forma` integer,
  `id_modalidad` integer,
  `id_sit_fin_anio_lectivo` integer,
  `id_sit_fin_rec_pedagoica` integer,
  `id_estado_matricula` integer,
  `estado` boolean DEFAULT true
);

CREATE TABLE `apoderado` (
  `id_apoderado` integer PRIMARY KEY AUTO_INCREMENT,
  `apellido_paterno` varchar(100),
  `apellido_materno` varchar(100),
  `nombres` varchar(150),
  `fecha_nacimiento` date,
  `id_escolaridad` integer,
  `ocupacion` varchar(220),
  `domicilio` varchar(150),
  `telefono` char(9),
  `whataspp` char(9),
  `estado` boolean DEFAULT true
);

CREATE TABLE `tipo_traslado` (
  `id_tipo_traslado` integer PRIMARY KEY AUTO_INCREMENT,
  `codigo` char(5),
  `nombre` varchar(100)
);

CREATE TABLE `traslados` (
  `id_traslados` integer PRIMARY KEY AUTO_INCREMENT,
  `id_estudiante` integer,
  `id_periodo_anual` integer,
  `id_tipo_traslado` integer,
  `fecha_traslado` date,
  `descripcion` varchar(255),
  `codigo_modular` varchar(255),
  `nombre_IE` varchar(255)
);

ALTER TABLE `seccion` ADD FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`);

ALTER TABLE `grado` ADD FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`id_nivel`);

ALTER TABLE `usuario` ADD FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_estado_civil`) REFERENCES `estado_civil` (`id_estado_civil`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`lengua_materna`) REFERENCES `lengua` (`id_lengua`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`segunda_lengua`) REFERENCES `lengua` (`id_lengua`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_tipo_discapacidad`) REFERENCES `discapacidad` (`id_discapacidad`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_tipo_sangre`) REFERENCES `tipo_sangre` (`id_tipo_sangre`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_padre`) REFERENCES `padre` (`id_padre`);

ALTER TABLE `estudiante` ADD FOREIGN KEY (`id_madre`) REFERENCES `madre` (`id_madre`);

ALTER TABLE `estudiante_enfermedad` ADD FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `estudiante_vacuna` ADD FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `padre` ADD FOREIGN KEY (`id_escolaridad`) REFERENCES `escolaridad` (`id_escolaridad`);

ALTER TABLE `madre` ADD FOREIGN KEY (`id_escolaridad`) REFERENCES `escolaridad` (`id_escolaridad`);

ALTER TABLE `domicilio_estudiante` ADD FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `domicilio_estudiante` ADD FOREIGN KEY (`id_periodo_anual`) REFERENCES `periodo_anual` (`id_periodo_anual`);

ALTER TABLE `situacion_laboral_estudiante` ADD FOREIGN KEY (`estudiante_id`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `situacion_laboral_estudiante` ADD FOREIGN KEY (`id_actividad_laboral`) REFERENCES `actividad_laboral` (`id_actividad_laboral`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_apoderado`) REFERENCES `apoderado` (`id_apoderado`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_periodo_anual`) REFERENCES `periodo_anual` (`id_periodo_anual`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_situacion_matricula`) REFERENCES `situacion_matricula` (`id_situacion_matricula`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_turno`) REFERENCES `turno` (`id_turno`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_forma`) REFERENCES `forma` (`id_forma`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_modalidad`) REFERENCES `modalidad` (`id_modalidad`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_sit_fin_anio_lectivo`) REFERENCES `situacion_final_matricula` (`id_sit_final_matricula`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_sit_fin_rec_pedagoica`) REFERENCES `situacion_final_matricula` (`id_sit_final_matricula`);

ALTER TABLE `matricula` ADD FOREIGN KEY (`id_estado_matricula`) REFERENCES `estado_matricula` (`id_estado_matricula`);

ALTER TABLE `apoderado` ADD FOREIGN KEY (`id_escolaridad`) REFERENCES `escolaridad` (`id_escolaridad`);

ALTER TABLE `traslados` ADD FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`);

ALTER TABLE `traslados` ADD FOREIGN KEY (`id_periodo_anual`) REFERENCES `periodo_anual` (`id_periodo_anual`);

ALTER TABLE `traslados` ADD FOREIGN KEY (`id_tipo_traslado`) REFERENCES `tipo_traslado` (`id_tipo_traslado`);



-- Creacion de vista 
CREATE VIEW vista_estudiantes AS
SELECT 
    e.id_estudiante,
    e.numero_documento AS documento_identificacion,
    e.apellido_paterno, 
    e.apellido_materno, 
    e.nombres,
    s.descripcion AS sexo_desc,
    s.codigo AS sexo_cod,
    ec.codigo AS estado_civil_cod,
    ec.descripcion AS estado_civil_desc,
    e.nacimiento_registrado,
    p.codigo AS pais_origen_cod,
    p.nombre AS pais_origen_desc,
    e.fecha_nacimiento,
    e.departamento,
    e.provincia,
    e.distrito,
    e.numero_hermanos,
    e.certificado_discapacidad,
    lm.codigo AS lengua_materna_cod,
    lm.descripcion AS lengua_materna_desc,
    sl.codigo AS segunda_lengua_cod,
    sl.descripcion AS segunda_lengua_desc,
    d.codigo AS tipo_discapacidad_cod,
    d.descripcion AS tipo_discapacidad_desc,
    ts.codigo AS tipo_sangre,
    e.experiencias_traumaticas,
    e.alergias,
    e.id_madre,
    e.id_padre,
    e.esta_matriculado AS matriculado
FROM 
    estudiante e
LEFT JOIN sexo s ON e.id_sexo = s.id_sexo
LEFT JOIN estado_civil ec ON e.id_estado_civil = ec.id_estado_civil
LEFT JOIN pais p ON e.id_pais = p.id_pais
LEFT JOIN lengua lm ON e.lengua_materna = lm.id_lengua
LEFT JOIN lengua sl ON e.segunda_lengua = sl.id_lengua
LEFT JOIN discapacidad d ON e.id_tipo_discapacidad = d.id_discapacidad
LEFT JOIN tipo_sangre ts ON e.id_tipo_sangre = ts.id_tipo_sangre;



CREATE VIEW vista_domicilio_estudiante AS
SELECT 
    de.domicilio_id,
    de.estudiante_id,
    de.id_periodo_anual,
    pa.nombre_año AS periodo_anual,
    de.direccion,
    de.lugar,
    de.departamento,
    de.provincia,
    de.distrito,
    de.telefono
FROM 
    domicilio_estudiante de
INNER JOIN estudiante e ON de.estudiante_id = e.id_estudiante
INNER JOIN periodo_anual pa ON de.id_periodo_anual = pa.id_periodo_anual;


CREATE VIEW vista_padre AS
SELECT 
    p.id_padre AS id_padre,
    p.apellido_paterno,
    p.apellido_materno,
    p.nombres,
    p.vive,
    p.fecha_nacimiento,
    e.descripcion AS escolaridad,
    p.ocupacion,
    p.vive_con_estudiante,
    p.religion
FROM padre p
LEFT JOIN escolaridad e ON p.id_escolaridad = e.id_escolaridad;


CREATE VIEW vista_madre AS
SELECT 
    m.id_madre AS id_madre,
    m.apellido_paterno,
    m.apellido_materno,
    m.nombres,
    m.vive,
    m.fecha_nacimiento,
    e.descripcion AS escolaridad,
    m.ocupacion,
    m.vive_con_estudiante,
    m.religion
FROM madre m
LEFT JOIN escolaridad e ON m.id_escolaridad = e.id_escolaridad;

CREATE VIEW vista_apoderado AS
SELECT 
    a.id_apoderado AS id_apoderado,
    a.apellido_paterno,
    a.apellido_materno,
    a.nombres,
    a.fecha_nacimiento,
    e.descripcion AS escolaridad,
    a.ocupacion,
    a.domicilio,
    a.telefono,
    a.whataspp,
    a.estado
FROM apoderado a
LEFT JOIN escolaridad e ON a.id_escolaridad = e.id_escolaridad;


CREATE VIEW vista_matricula AS
SELECT 
    m.id_matricula AS id_matricula,
    e.id_estudiante AS id_estudiante,
    a.id_apoderado AS id_apoderado,
    u.id_usuario AS id_usuario_responsable,
    pa.nombre_año AS periodo_academico,
    n.codigo AS nivel_cod,
    n.nombre_nivel AS nivel_desc, -- Nivel educativo
    g.nombre_grado AS grado, -- Grado académico
    se.codigo_seccion AS seccion,
    t.nombre_turno AS turno,
    mo.descripcion AS modalidad,
    fo.descripcion AS forma,
    sm.descripcion AS situacion_matricula,
    sfm.descripcion AS situacion_final_anio,
    em.descripcion AS estado_matricula,
    m.fecha_matricula,
    m.fecha_actualizacion,
    m.fecha_retiro,
    m.nombre_IE,
    m.codigo_modular,
    m.instancia_ugel,
    m.estado,
    m.id_sit_fin_anio_lectivo AS anio_lectivo,
    m.id_sit_fin_rec_pedagoica AS recuperacion_pedagogica
FROM matricula m
LEFT JOIN estudiante e ON m.id_estudiante = e.id_estudiante
LEFT JOIN apoderado a ON m.id_apoderado = a.id_apoderado
LEFT JOIN usuario u ON m.id_usuario = u.id_usuario
LEFT JOIN periodo_anual pa ON m.id_periodo_anual = pa.id_periodo_anual
LEFT JOIN seccion se ON m.id_seccion = se.id_seccion
LEFT JOIN grado g ON se.id_grado = g.id_grado -- Relación entre sección y grado
LEFT JOIN nivel n ON g.id_nivel = n.id_nivel -- Relación entre grado y nivel
LEFT JOIN turno t ON m.id_turno = t.id_turno
LEFT JOIN modalidad mo ON m.id_modalidad = mo.id_modalidad
LEFT JOIN forma fo ON m.id_forma = fo.id_forma
LEFT JOIN situacion_matricula sm ON m.id_situacion_matricula = sm.id_situacion_matricula
LEFT JOIN situacion_final_matricula sfm ON m.id_sit_fin_anio_lectivo = sfm.id_sit_final_matricula
LEFT JOIN estado_matricula em ON m.id_estado_matricula = em.id_estado_matricula;






-- Inicialización de datos para las tablas

-- Tabla: modalidad
INSERT INTO modalidad (codigo, descripcion, estado) VALUES
('ERB', 'Educ. Basica regular', true),
('EBR-AD', 'Edu. Basica regular a distancia', true),
('EBA', 'Edu. basica alternativa', true),
('EBE', 'Edu. basica Especial', true);

-- Tabla: forma
INSERT INTO forma (codigo, descripcion, estado) VALUES
('ESC', 'Escolarizado', true),
('NoESC', 'No Escolarizado', true);

-- Tabla: tipo_documento
INSERT INTO tipo_documento (nombre, num_caracteres, estado) VALUES
('DNI', 8, true),
('CE', NULL, true), -- Buscar caracteres si aplica
('OT', NULL, true);

-- Tabla: estado_civil
INSERT INTO estado_civil (codigo, descripcion, estado) VALUES
('S', 'Soltero', true),
('C', 'Casado', true),
('V', 'Viudo', true),
('D', 'Divorciado', true),
('Cv', 'Conviviente', true);

-- Tabla: actividad_laboral
INSERT INTO actividad_laboral (codigo, descripcion, estado) VALUES
('OB', 'Obrero', true),
('EM', 'Empleado', true),
('TI', 'Trabajador Independiente', true),
('E/O', 'Empleador', true),
('TF', 'Trabaj. Fam no remunerado', true),
('TH', 'Trabaj. Del Hogar', true);

-- Tabla: sexo
INSERT INTO sexo (codigo, descripcion) VALUES
('M', 'Mujer'),
('H', 'Hombre');

-- Tabla: situacion_matricula
INSERT INTO situacion_matricula (codigo, descripcion, estado) VALUES
('I', 'Ingresante', true),
('P', 'Promovido', true),
('PG', 'Permanece en el Grado', true),
('RE', 'Reentrante', true);

-- Tabla: situacion_final_matricula
INSERT INTO situacion_final_matricula (codigo, descripcion, estado) VALUES
('A', 'Aprobado', true),
('RR', 'Requiere Recuperacion', true),
('D', 'Desaprobado', true),
('R', 'Retirado', true);

-- Tabla: estado_matricula
INSERT INTO estado_matricula (codigo, descripcion) VALUES
('R', 'Reserva'),
('A', 'Aceptado'),
('C', 'Concluido'),
('Re', 'Retirado por traslado');

-- Tabla: pais
INSERT INTO pais (codigo, nombre, estado) VALUES
('P', 'Peru', true),
('E', 'Ecuador', true),
('C', 'Colombia', true),
('B', 'Brasil', true),
('Bo', 'Bolivia', true),
('Ch', 'Chile', true),
('OT', 'Otro', true);

-- Tabla: turno
INSERT INTO turno (codigo, nombre_turno, estado) VALUES
('M', 'Mañana', true),
('T', 'Tarde', true),
('N', 'Noche', true);

-- Tabla: lengua
INSERT INTO lengua (codigo, descripcion, estado) VALUES
('C', 'Castellano', true),
('Q', 'Quechua', true),
('Ai', 'Aimara', true),
('OT', 'Otra Lengua', true),
('E', 'Lengua Extranjera', true);

-- Tabla: escolaridad
INSERT INTO escolaridad (codigo, descripcion, estado) VALUES
('SE', 'Sin Escolaridad', true),
('P', 'Primaria', true),
('S', 'Secundaria', true),
('SP', 'Superior', true);

-- Tabla: discapacidad
INSERT INTO discapacidad (codigo, descripcion, estado) VALUES
('DI', 'Intelectual', true),
('DA', 'Auditiva', true),
('DV', 'Visual', true),
('DF', 'Física', true),
('DM', 'Motora', true),
('SC', 'Sordoceguera', true),
('OT', 'Otra', true);

-- Tabla: tipo_sangre
INSERT INTO tipo_sangre (codigo, estado) VALUES
('A', true),
('B', true),
('AB', true),
('O', true);


-- Tabla: nivel
INSERT INTO nivel (codigo, nombre_nivel, estado) VALUES
('PRI', 'Primaria', true),
('SEC', 'Secundaria', true);

-- Tabla: grado
INSERT INTO grado (nombre_grado, id_nivel) VALUES
('Primero', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Segundo', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Tercero', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Cuarto', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Quinto', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Sexto', (SELECT id_nivel FROM nivel WHERE codigo = 'PRI')),
('Primero', (SELECT id_nivel FROM nivel WHERE codigo = 'SEC')),
('Segundo', (SELECT id_nivel FROM nivel WHERE codigo = 'SEC')),
('Tercero', (SELECT id_nivel FROM nivel WHERE codigo = 'SEC')),
('Cuarto', (SELECT id_nivel FROM nivel WHERE codigo = 'SEC')),
('Quinto', (SELECT id_nivel FROM nivel WHERE codigo = 'SEC'));

-- Tabla: seccion
INSERT INTO seccion (codigo_seccion, id_grado, estado)
SELECT c, id_grado, true FROM grado, (SELECT 'A' c UNION ALL SELECT 'B' UNION ALL SELECT 'C' UNION ALL SELECT 'D' UNION ALL SELECT 'E' UNION ALL SELECT 'F' UNION ALL SELECT 'G') secciones;


-- Insertar los datos iniciales
INSERT INTO tipo_traslado (codigo, nombre) VALUES
('ING', 'Ingreso'),
('SAL', 'Salida');


-- PENDIENTE AGERGAR USUARIO ADMIN, ROL Y PERMISOS