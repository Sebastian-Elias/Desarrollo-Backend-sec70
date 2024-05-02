<?php
include_once '../version1.php';

//parametros
$existeId = false;
$valorId = 0;

if (count($_parametros)>0){
    foreach($_parametros as $p){
        if(strpos($p, 'id') !== false){
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if($_version == 'v1'){
    if ($_mantenedor == 'services'){
        switch ($_metodo){
            case 'GET':
                if($_header == $_token_get_evaluacion){
  
                    
                    $retorno = [
                        [
                            "id" => 1,
                            "titulo" => [
                                "esp" => "Consultoría digital",
                                "eng" => "Digital consulting"
                            ],
                            "texto" => [
                                "esp" => "Ofrecemos servicios de consultoría digital personalizados que permiten a tu empresa aprovechar las últimas tecnologías y tendencias. Desde la estrategia hasta la implementación, te ayudamos a transformar y optimizar tus procesos para mantenerte competitivo en el mundo digital.",
                                "ing" => "We offer personalized digital consulting services that enable your company to leverage the latest technologies and trends. From strategy to implementation, we help you transform and optimize your processes to stay competitive in the digital world."

                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 2,
                            "titulo" => [
                                "esp" => "Soluciones multiexperiencia",
                                "eng" => "Multi-experience solutions"
                            ],
                            "texto" => [
                                "esp" => "Creamos experiencias digitales inmersivas y cohesivas para tus clientes, integrando múltiples canales y dispositivos. Desde aplicaciones móviles hasta plataformas de realidad virtual, nos enfocamos en proporcionar experiencias fluidas y atractivas que fortalezcan la relación con tu audiencia.",
                                "ing" => "We create immersive and cohesive digital experiences for your customers, integrating multiple channels and devices. From mobile applications to virtual reality platforms, we focus on providing smooth and engaging experiences that strengthen the relationship with your audience."

                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 3,
                            "titulo" => [
                                "esp" => "Evolución de ecosistemas",
                                "eng" => "Ecosystem evolution"
                            ],
                            "texto" => [
                                "esp" => "Ayudamos a tu empresa a evolucionar y adaptarse dentro de su ecosistema digital, promoviendo la colaboración y la innovación. Mediante el análisis y la optimización de redes, relaciones y procesos, facilitamos la creación de un entorno sostenible y competitivo para tu negocio.",
                                "ing" => "We help your company evolve and adapt within its digital ecosystem, promoting collaboration and innovation. Through analysis and optimization of networks, relationships, and processes, we facilitate the creation of a sustainable and competitive environment for your business."

                            ],
                            "activo" => true
                        ],
                        [
                            "id" => 4,
                            "titulo" => [
                                "esp" => "Soluciones Low-Code",
                                "eng" => "Low-code solutions"
                            ],
                            "texto" => [
                                "esp" => "Ofrecemos soluciones low-code que permiten a tus equipos desarrollar aplicaciones y automatizaciones sin necesidad de programación avanzada. Esto acelera la entrega de soluciones, fomenta la innovación y empodera a tus empleados para que participen en la transformación digital de la empresa.",
                                "ing" => "We offer low-code solutions that allow your teams to develop applications and automations without the need for advanced programming. This accelerates solution delivery, fosters innovation, and empowers your employees to participate in the digital transformation of the company."

                            ],
                            "activo" => true
                        ],

                    ];
                    http_response_code(200);
                    echo json_encode(['data' => $retorno]);

                }else{
                    http_response_code(401);
                    echo json_encode(['error' => 'no tiene autorizacion ciisa']);
                }
                break;
            default:
                http_response_code(404);
                break;
        }
    }
}