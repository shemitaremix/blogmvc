<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class publicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //primeros titulos
        $temasu1 = [ 'Unidad 1 componentes y características del cliente/servido ', 'Definir el concepto de programa maestro ', 'Explicar los procesos y tareas del programa maestro ',
        'Describir los tipos de servidores ', 'Reconocer las características de la arquitectura cliente/servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridad',
        'Identificar las ventajas y desventajas de la arquitectura cliente/servidor', 'Definir el concepto de computo en la nube ', 'Definir los conceptos de infraestructuras a service (IAAS), plataformas a service (PAAS), software service (SAAS)',
        'Describir la arquitectura cliente/servidor con los modelos de computo en la nube, IAAS, PAAS, SAAS',''];

        $tituloeditu1 = [
            //Primer titulo del tema
            "<h1>Unidad 1: Fundamentos de la arquitectura Cliente-Servidor</h1>
            <ul><li>Unidad 1</li></ul>",
            //Segundo titulo del tema
            "<h1>Definir el concepto de programa maestro</h1>
            <ul><li>Unidad 1</li></ul>",
            //Tercer titulo del tema
            "<h1>Explicar los procesos y tareas del programa maestro</h1>
            <ul><li>Unidad 1</li></ul>",
            //Cuarto titulo del tema
            "<h1>Describir los tipos de servidores</h1>
            <ul><li>Unidad 1</li></ul>",
            //Quinto titulo del tema
            "<h1>Reconocer las características de la arquitectura cliente/servidor: servicios, recursos compartidos, protocolos asimétricos, independencia de la ubicación, compatibilidad de clientes y servidores, comunicación de mensajes, encapsulación de servicios, escalabilidad e integridadDescribir los tipos de servidores</h1>
            <ul><li>Unidad 1</li></ul>",
            //sexto titulo del tema
            "<h1>Identificar las ventajas y desventajas de la arquitectura cliente/servidors</h1>
            <ul><li>Unidad 1</li></ul>",
            //septimo titulo del tema
            "<h1>Definir el concepto de computo en la nube</h1>
            <ul><li>Unidad 1</li></ul>",
            //Octavo titulo del tema
            "<h1>Definir los conceptos de infraestructuras a service (IAAS), plataformas a service (PAAS), software service (SAAS)</h1>
            <ul><li>Unidad 1</li></ul>",
            //noveno titulo del tema
            "<h1>Describir la arquitectura cliente/servidor con los modelos de computo en la nube, IAAS, PAAS, SAAS</h1>
            <ul><li>Unidad 1</li></ul>",
            "sda"
        ];

    $contenido1 = [
             //primer
             "<p> La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los
             proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, 
             es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras.</p>
             <p>En la arquitectura C/S el remitente de una solicitud es conocido como cliente. Sus características son:

             Es quien inicia solicitudes o peticiones, tiene por tanto un papel activo en la comunicación (dispositivo maestro o amo).
             Espera y recibe las respuestas del servidor.
             Por lo general, puede conectarse a varios servidores a la vez.
             Normalmente interactúa directamente con los usuarios finales mediante una interfaz gráfica de usuario.
             </p>
             <p>Al receptor de la solicitud enviada por el cliente se le conoce como servidor. Sus características son:</p>
             <p>Al iniciarse espera a que lleguen las solicitudes de los clientes, desempeña entonces un papel pasivo en la comunicación (dispositivo esclavo).</p>
             <p>Cada plataforma puede ser escalable independientemente. Los cambios realizados en las plataformas de los Clientes o de los Servidores, ya sean por actualización o por 
              tecnológico, se realizan de una manera transparente para el usuario final.</p>
              <p>La interrelación entre el hardware y el software está basada en una infraestructura poderosa, de tal forma que el acceso a los recursos de la red no muestra la complejidad de los 
              diferentes tipos de formatos de datos y de los protocolos.</p>",
            //segundo
            "<p>
            El Programa Maestro de Producción, conocido como Programa maestro o MPS -en inglés Master production Schedule- es un programa que muestra qué productos se 
             y especifica en qué cantidades se hará durante un período de tiempo.
            </p>
            <p>
            Una de las situaciones donde más comúnmente se necesita la funcionalidad de un MPS es por ejemplo, en el caso de un fabricante que vende productos bajo pedido, es decir que primero toma la 
            orden de venta, luego fabrica el producto y, pasado un cierto tiempo, entrega el producto al cliente. Es posible que la parte del proceso de ensamblado que se lleva a cabo en la planta del fabricante tenga una duración máxima de un día, pero para poder llevar a cabo el ensamble necesita una serie de componentes y subensambles cuyos plazos de entrega van desde los dos días hasta los dos meses. Si el fabricante quisiera cumplir con la entrega de los productos al cliente final en un plazo no mayor a 48 horas, debe tener disponibilidad de cada uno de los componentes necesarios en el momento justo de tomar la orden de venta; y para ser rentable,
             necesita hacerlo de tal forma que el inventario de componentes sea el mínimo posible.
            </p>
            <p>
            Una forma de solventar esta necesidad sería a través de un MRP donde se definan una serie de Puntos de Abastecimiento para cada uno de los componentes y subensambles necesarios para cubrir la demanda más un pequeño inventario de seguridad para cubrir las variaciones que se presenten. Este método funciona correctamente cuando la demanda se mantiene más o menos estable durante un largo periodo de tiempo de tal manera que los 
            Puntos de Abastecimiento para cada componente se puedan determinar con base en la demanda previa.
            </p>",
            //tercer
            "<p>
            En gran medida, la elaboración del PMP depende del sistema de manufactura de la compañía. Sin embargo, 
             grandes rasgos toma en cuenta:  
            </p>
            <p>
            El personal y recursos involucrados en la producción. 
            </p>
            <p>
            El volumen por producir, con sus fechas límite.  
            </p>
            <p>
            Nivel de inventarios o cantidad de productos actualmente disponibles. 
            </p>
            <p>
            Como podemos ver, el MPS o programa maestro es una herramienta para obtener el máximo provecho de nuestra 
            capacidad productiva, con la rentabilidad y el nivel de cumplimiento con los clientes que esto conlleva.
            </p>
            <p>
            Por último, establecemos las ordenes de producción alineando lo obtenido en el pronóstico de demanda con los pedidos de los clientes. En cualquier caso, no todas las organizaciones hacen esto. 
            El sistema de manufactura utilizado (MTO, MTS, ATO) puede variar la manera de establecer esas ordenes.
            </p>",
            //cuarto
            "<p>
            -Servicios: Es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores. Un cliente realiza 
             a otro programa, el servidor, quien le da respuesta.
            </p>
            <p>
            -Recursos compartidos: Combinación de un cliente que interactúa con el usuario, y un servidor que interactúa con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como un motor de software 
            que maneja recursos compartidos tales como bases de datos, impresoras, Módem, etc.
            </p>
            <p>
            -Protocolos asimétricos: Los clientes inician conversaciones. Los servidores esperan su establecimiento pasivamente.
            </p>
            <p>
            -Independencia de la ubicación: El servidor es un proceso que puede residir en el mismo equipo que el proceso cliente o en un equipo
            distintos a lo largo de una red. Suele ocultarse a los clientes la ubicación del servidor mediante el
            redireccionamiento de las llamadas de servicio en caso de ser necesario. Un programa puede ser un
            cliente, un servidor o ambos a la vez.
            </p>
            <p>
            -Compatibilidad de clientes y servidores: El software ideal de cliente/servidor es independiente del hardware y de la plataforma de software
            del sistema operativo. Se debe poder mezclar e igualar las plataformas del cliente y del servidor.            
            </p>
            <p>
            -Comunicación de mensajes: Intercambio basado en mensajes
            Clientes y servidores tienen bajo acoplamiento e interactúan a través de un mecanismo determinado
            de transmisión de mensajes. El mensaje es el mecanismo de entrega para las solicitudes y de
            respuestas de servicios. (se considera como mensaje tanto a la solicitud como a la respuesta
            
            </p>",
            //quinto
            "<p>
            Ventajas:
            </p>
            <p>• Posibilidad de reducir costos de desarrollo.</p>
            <p>• Mejores herramientas de desarrollo.</p>
            <p>• Modificabilidad es compatible con buen diseño.</p>
            <p>• Flexibilidad en el cliente.</p>
            <p>• Permite un mejor control sobre permisos de acceso a información.</p>
            <p>• Escalabilidad. Si la empresa cambia en lo que respecta al tamaño, alcance, requerimientos de totalidad</p>
            <p>Desventajas</p>
            <p>• Falta de profesionales calificados.</p>
            <p>• Necesidad de reimplementación de software existente, ya que el software monolítico no suele</p>
            <p>• Necesidad de entrenamiento de usuarios, debido al cambio de las aplicaciones existentes.</p>",
            //sexto
            "<p>
            La transformación digital ayuda a las empresas a aumentar rápidamente la eficiencia, la agilidad y la conectividad a medida que usan la tecnología para transformar los procesos empresariales en algo más simple, rápido, seguro, flexible y rentable. 
            La tecnología de computación en nube es un pilar de la transformación digital.
            </p>
            <p>
            La transformación digital ayuda a las empresas a aumentar rápidamente la eficiencia, la agilidad y la conectividad a medida que usan la tecnología para transformar los procesos empresariales en algo más simple, rápido, seguro, flexible y rentable. 
            La tecnología de computación en nube es un pilar de la transformación digital.
            </p>",
            //septimo
            "<p>
            Infrastructure as a Service (IAAS): Infraestructura como servicio (IaaS) se refiere a los servicios en línea que proporcionan un alto-nivel de APIs utilizadas para indireccionar detalles a bajo nivel de infraestructura como recursos de informática física, ubicación, dato partitioning, scaling, seguridad, copia de seguridad etc. Un hypervisor, como Xen, Oracle VirtualBox, Oracle VM, KVM, VMware ESX/ESXi, o Hyper-V, LXD, 
            corre las máquinas virtuales como huéspedes.
            </p>
            <p>
            Platform as a Service (PAAS):  Es un entorno de desarrollo e implementación completo en la nube, con recursos que permiten entregar todo, desde aplicaciones sencillas basadas en la nube hasta aplicaciones empresariales sofisticadas habilitadas para la nube. Usted le compra los recursos que necesita a un proveedor de servicios en la nube, a los que accede a través de una conexión segura a Internet,
             pero solo paga por el uso que hace de ellos.
            </p>
            <p>
            Software as a Service (SAAS): Oftware as a Service, es una forma de poner. a disposición softwares y soluciones de tecnología por medio de la internet, como un servicio. Con este modelo,  tu empresa no necesita instalar, mantener y actualizar hardwares y softwares.
             El acceso es fácil y simples: sólo es necesario contar con una conexión a internet.
            </p>
            <p>
            Las aplicaciones SaaS también son llamadas softwares basados en Web, softwares on demand o softwares hospedados. Independientemente del nombre, ellos son ejecutados en los servidores de las empresas proveedoras, que tienen la responsabilidad de gestionar el acceso y mantener la estructura de datos, 
            a conectividad y los servidores necesarios para el funcionamiento del servicio.
            </p>",
            //octavo
            "<p>
            IaaS (Infrastructure as a Service): externalización de la infraestructura física
            El IaaS ofrece al cliente una infraestructura externa con Azure. El proveedor es quien se encarga de la instalación y mantenimiento de los servidores de archivos, de las redes y del almacenamiento de los datos. Esto supone un ahorro tanto en coste como en tiempo para el cliente, que no necesita comprar equipos ni dedicar un solo minuto a la instalación de los recursos, sólo tiene que alquilárselos al proveedor. En este tipo de servicio el cliente, al solo disponer en la nube de una infraestructura “física”, es quien se encarga de sus aplicaciones, de sus datos y del sistema de explotación.

            </p>
            <p>
            PaaS (Platform as a Service): externalización de la infraestructura material, de las aplicaciones y de los datos
            El PaaS incluye los servicios IaaS, pero además añade los servidores, el almacenamiento y las redes, el proveedor también proporciona todas las aplicaciones middleware, es decir, el sistema de explotación, la base de datos, el servidor web… En otras palabras, el cliente alquila la explotación de los servidores y de las herramientas integradas.

            </p>
            <p>
            SaaS (Software as a Service): el tod incluido
            El SaaS es el servicio más conocido. Engloba los dos anteriores y además el proveedor se ocupa de la instalación, configuración, el funcionamiento y el mantenimiento de la interfaz y de los servicios de computacion en la nube. Normalmente se paga una cuota mensual o anual. Pudiendo hacer uso de los servicios que ofrece el proveedor. Microsoft en este aspecto es diferente con Azure, cobra solo por lo que se usa (por tiempo de ejecución de una máquina virtual, por tiempo de ocupación de almacenamiento, etc). Si no tiene uso, no hay factura.

            </p>",
            "<p>
            Son orientados a la conexión.
            Se garantiza la transmisión de todos los octetos sin errores ni omisiones.
            Se garantiza que todo octeto llegará a su destino en el mismo orden en que se ha transmitido.
            Estas propiedades son muy importantes para garantizar la corrección de los programas que tratan la información.
            El protocolo UDP es un protocolo no orientado a la conexión, sin garantía de entrega. En ningún caso se garantiza que llegue o que lleguen todos los mensajes en el mismo orden que se mandaron. Esto lo hace adecuado para el envío de </p>",
             "<p>dsdasd</p>"
        ];

        $temasu2 = ['Unidad 2 Estrategias de reparto de complejidad ', 'Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas ', 
        'Definir los conceptos de lógica de accesos, presentación y negocio a datos','Explicar el proceso de diseño de lógica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación','Explicar el proceso de desarrollo de lógica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación'
        , 'Definir el concepto niveles vinculados a nivel programación web','Explicar el proceso de planificación en dos niveles','Explicar el proceso de planificación en tres niveles',
        'Explicar el proceso de planificación multiniveles','Identificar problemas de actualización y mantenimiento de aplicaciones multinivel',
        'Reconocer los conceptos de modelo, control y vista, en la arquitectura cliente/servidor','Reconocer el concepto de la modelo vista controlador (MVC) en la arquitectura cliente/servidor',
        'Describir el desarrollo de software a partir del MVC, en las arquitecturas cliente/servidor','Definir el concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API)', 'Explicar el proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API)',
        'Definir el concepto de sockets','Explicar el proceso del uso de sockets en aplicaciones'];

        $tituloeditu2 = [
            //Primer titulo del tema
            "<h1>Unidad 2 Estrategias de reparto de complejidad</h1>
            <ul><li>Unidad 2</li></ul>",
            //Segundo titulo del tema
            "<h1>Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas</h1>
            <ul><li>Unidad 2</li></ul>",
            //Tercer titulo del tema
            "<h1>Definir los conceptos de lógica de accesos, presentación y negocio a datos</h1>
            <ul><li>Unidad 2</li></ul>",
            //Cuarto titulo del tema
            "<h1>Explicar el proceso de diseño de lógica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación</h1>
            <ul><li>Unidad 2</li></ul>",
            //Quinto titulo del tema
            "<h1>Explicar el proceso de desarrollo de lógica de acceso a datos, lógica de presentación de datos y lógica de negocio o lógica de aplicación</h1>
            <ul><li>Unidad 2</li></ul>",
            //sexto titulo del tema
            "<h1>Definir el concepto niveles vinculados a nivel programación web </h1>
            <ul><li>Unidad 2</li></ul>",
            //septimo titulo del tema
            "<h1>Explicar el proceso de planificación en dos niveles </h1>
            <ul><li>Unidad 2</li></ul>",
            //Octavo titulo del tema
            "<h1>Explicar el proceso de planificación en tres niveles</h1>
            <ul><li>Unidad 2</li></ul>",
            //Decimo titulo del tema
            "<h1>Explicar el proceso de planificación multiniveles </h1>
            <ul><li>Unidad 2</li></ul>",
            //onceavotitulo del tema
            "<h1>Identificar problemas de actualización y mantenimiento de aplicaciones multinivel  </h1>
            <ul><li>Unidad 2</li></ul>",
            //doceavo titulo del tema
            "<h1>Reconocer los conceptos de modelo, control y vista, en la arquitectura cliente/servidor   </h1>
            <ul><li>Unidad 2</li></ul>",
            //treceabo titulo del tema
            "<h1>Reconocer el concepto de la modelo vista controlador (MVC) en la arquitectura cliente/servidor    </h1>
            <ul><li>Unidad 2</li></ul>",
            //catorceabo titulo del tema
            "<h1>Describir el desarrollo de software a partir del MVC, en las arquitecturas cliente/servidor    </h1>
            <ul><li>Unidad 2</li></ul>",
            //quinceabo titulo del tema
            "<h1>Definir el concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API)   </h1>
            <ul><li>Unidad 2</li></ul>",
            //dieciseiabo titulo del tema
            "<h1>Explicar el proceso de comunicación y configuración orientada a conexión e interfaz de programación de aplicaciones (API)    </h1>
            <ul><li>Unidad 2</li></ul>",
            //dieciceteavo titulo del tema
            "<h1>Definir el concepto de sockets   </h1>
            <ul><li>Unidad 2</li></ul>",
            //dieciochoavo titulo del tema
            "<h1>Explicar el proceso del uso de sockets en aplicaciones  </h1>
            <ul><li>Unidad 2</li></ul>",
        ];

        $contenidoedit2 = [
        //primer
        "<p>
        Reconocer los conceptos de presentación distribuida, presentación remota, lógica o proceso distribuido, acceso a datos remotos y bases de datos distribuidas.
        presentación distribuida: Un sistema distribuido es un sistema de información en el cual las funciones se
        reparten por áreas de trabajo diferentes que trabajan de forma coordinada para
        asumir los objetivos que la organización asigna a ese sistema de información.
        Esta definición no obliga a que los servicios sean internos ni fabricados por la
        propia organización.

        </p>
        <p>
        presentación remota: El cliente realiza tanto las funciones de presentación como los procesos. 
        El servidor almacena y gestiona los datos que permanecen en una base de datos centralizada.
        </p>
        <p>
        Lógica o proceso distribuido: La lógica de los procesos se divide entre los distintos componentes del cliente y del servidor. El diseñador de la aplicación debe definir los servicios y las interfaces del sistema de información de forma que los papeles de cliente y servidor sean intercambiables, 
        excepto en el control de los datos que es responsabilidad exclusiva del servidor.
        </p>
        <p>Acceso a datos remotos: El cliente realiza tanto las funciones de presentación como los procesos. El servidor almacena y gestiona los datos que permanecen en una base de datos centralizada.</p>",
        //segundo
        "<p>Lógica de acceso: permitirán únicamente el ingreso a los usuarios autorizados por la dependencia correspondiente, y en el nivel asignado, sobre los datos o sistemas necesarios para desempeñar sus tareas habituales</p>
        <p>Presentación: Presentación remota
        La capa de presentación de datos, se ejecuta en el cliente totalmente. En ella se realizan las validaciones de los datos de entrada, el formateo de los de salida, etc. La lógica de negocio y el acceso a la base de datos se aloja en el servidor.
        </p>
        <p>
        Presentación distribuida
                La capa de presentación se encuentra distribuida entre el cliente y el servidor, de manera que en el cliente se modifica o adapta la presentación que ofrece el servidor. Este tipo de sistemas tienen un difícil mantenimiento.

        </p>
        <p>
        Negocio de datos: Implica el uso de métricas para monitorear el rendimiento y la rentabilidad. También proporciona apoyo factico para mejorar la toma de decisiones a fin de que las empresas
         puedan resolver problemas y mejorar los procesos.
        </p>",
        //tercero
        "<p>
        Diseño de lógica de acceso a datos: El diseño físico de la base de datos optimiza el rendimiento a la vez que asegura la integridad de los datos al evitar repeticiones innecesarias de datos. Durante el diseño físico, se transforman las entidades en tablas, 
         instancias en filas y los atributos en columnas.
        </p
        <p>
        Una vez completado el diseño lógico de la base de datos, se pasa al diseño físico. El personal que realiza el diseño debe tomar decisiones que afectan al diseño físico, 
        algunas de las cuales se listan a continuación.
        </p>
        <p>
        Lógica de presentación de datos: Esta sección proporciona breves descripciones de las cuatro capas lógicas. Las descripciones hacen referencia a los componentes de la aplicación implementados utilizando el modelo de componente de plataforma de J2EE. No obstante,
         otros modelos de componente distribuidos, como CORBA, también son compatibles con esta arquitectura
        </p>
        <p>
        Lógica de negocio o lógica de aplicación: El término lógica de negocio hace referencia a la parte de un sistema que se encarga de codificar las reglas de negocio del mundo real que determinan
         cómo la información puede ser creada, almacenada y cambiada. 
        </p>",
        //cuarto
        "<p>
        Desarrollo de lógica de acceso a datos: La capa de acceso a datos tiene dos tipos fundamentales de componentes:

        Componentes de lógica de acceso a datos. Estos presentan una interfaz a la capa de negocio que abstrae de la forma en que se acceden a los datos almacenados, haciendo a la aplicación más fácil de configurar y mantener
        Componentes utilitarios y auxiliares. Consisten en librerías especializadas o APIs que permiten acceder, manipular o transformar los datos dentro de los componentes de de lógica de acceso a datos. Por lo general son suministrados por el fabricante del gestor de base de datos (Oracle, IBM, etc.)

        </p>
        <p>
        Lógica de presentación de datos:  Capa de presentación: la que ve el usuario (también se la denomina «capa de usuario»), presenta el sistema al usuario, le comunica la información y captura la información del usuario en un mínimo de proceso (realiza un filtrado previo para comprobar que no hay errores de formato). También es conocida como interfaz gráfica y debe tener la característica de ser «amigable» (entendible y fácil de usar) para el usuario. Esta capa se comunica únicamente con la capa de negocio.
        Capa de negocio: es donde residen los programas que se ejecutan, se reciben las peticiones del usuario y se envían las respuestas tras el proceso. Se denomina capa de negocio (e incluso de lógica del negocio) porque es aquí donde se establecen todas las reglas que deben cumplirse. Esta capa se comunica con la capa de presentación, para recibir las solicitudes y presentar los resultados, y con la capa de datos, para solicitar al gestor de base de datos almacenar o recuperar datos de él. También se consideran aquí los programas de aplicación.

        </p>
        <p>
        Lógica de negocio o lógica de aplicación: En informática y ciencias de la computación, en particular en análisis y diseño orientado a objetos, 
        el término lógica de negocio es la parte de un sistema que se encarga de codificar las reglas de negocio del mundo real que determinan cómo la información puede ser creada, almacenada y cambiada. En programación es una de las capas del modelo MVC Modelovistacontrolador separando así la complejidad del desarrollo en capas independientes.
        </p>
        <p>La arquitectura en 2 niveles se utiliza para describir los sistemas cliente/servidor en donde el cliente solicita recursos y el servidor responde directamente a la solicitud, con sus propios recursos, 
        esto significa que el servidor requiere otra aplicación para proporcionar parte del servicio</p>
        ",
        "<p>
        Es una arquitectura cliente/servidor en la que el servidor es polivalente, es decir, puede responder directamente a todas las solicitudes de recurso de cliente
        Sin embargo, en la arquitectura en 3 niveles, las aplicaciones al nivel del servidor son descentralizadas de uno a otro, es decir, cada servidor se especializa en una determinada tarea , por ejemplo servidor web/servidor de bases de datos, la arquitectura en 3 niveles permite 
        </p>
        <p>
        Un mayor grado de flexibilidad 
        Mayor seguridad ya que la seguridad se puede definir independientemente para cada servicio y en cada nivel 
        </p>",
        "<p>
        En la arquitectura de tres niveles cada servidor (nivel 1 o 2)
        realiza una tarea especializada, por lo tanto, un servidor puede utilizar los servicios de otros servidores para proporcionar su propio servicio, por consiguiente, la arquitectura en 3 niveles es potencialmente una arquitectura en N-niveles 
        </p>",
        "<p>
        La arquitectura cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta.
        </p>",
        "<p>Al hablar del desarrollo de aplicaciones Web resulta adecuado presentarlas dentro de las aplicaciones multinivel. Los sistemas típicos cliente/servidor pertenecen a la categoría de las aplicaciones de dos niveles. La aplicación reside en el cliente mientras que la base de datos se encuentra en el servidor. En este tipo de aplicaciones el peso del cálculo recae en el cliente, mientras que el servidor hace la parte menos pesada, y eso que los clientes suelen ser máquinas menos potentes que los servidores. Además, está el problema de la actualización y el mantenimiento 
        de las aplicaciones, ya que las modificaciones a la misma han de ser trasladada a todos los clientes.</p>
        <p>
        Para solucionar estos problemas se ha desarrollado el concepto de arquitecturas de tres niveles: interfaz de presentación, lógica de la aplicación y los datos.
        La capa intermedia es el código que el usuario invoca para recuperar los datos deseados. La capa de presentación recibe los datos y los formatea para mostrarlos adecuadamente. Esta división entre la capa de presentación y la de la lógica permite una gran flexibilidad a la hora de construir aplicaciones, ya que se pueden tener múltiples interfaces sin cambiar la lógica de la aplicación.
        </p>
        <p>
        La tercera capa consiste en los datos que gestiona la aplicación. Estos datos pueden ser cualquier fuente de información como una base de datos o documentos XML.
        Convertir un sistema de tres niveles a otro multinivel es fácil ya que consiste en extender la capa intermedia permitiendo que convivan múltiples aplicaciones en lugar de una sola
        </p>",
        "<p>
        La arquitectura cliente servidor tiene dos partes claramente diferenciadas, por un lado la parte del servidor y por otro la parte de cliente o grupo de clientes donde lo habitual es que un servidor sea una máquina bastante potente con un hardware y software específico que actúa de depósito de datos y 
         como un sistema gestor de base de datos o aplicaciones.
        </p>
        <p>
        En esta arquitectura el cliente suele ser estaciones de trabajo que solicitan varios servicios al servidor, mientras que un servidor es una máquina que actúa como depósito de datos y funciona como un sistema gestor de base de datos, este se encarga de dar la respuesta demandada por el cliente.
        </p>
        <p>Esta arquitectura se aplica en diferentes modelos informáticos alrededor del mundo donde su propósito es mantener unas comunicaciones de información entre diferentes entidades de una red mediante el uso de protocolos establecidos y el apropiado almacenaje de la misma.</p>",
        "<p>
        De manera genérica, los componentes de MVC se podrían definir como sigue:
        El Modelo: Es la representación de la información con la cual el sistema opera, por lo tanto gestiona todos los accesos a dicha información, tanto consultas como actualizaciones, implementando también los privilegios de acceso que se hayan descrito en las especificaciones de la aplicación (lógica de negocio). Envía a la 'vista' aquella parte de la información que en cada momento se le solicita para que sea mostrada (típicamente a un usuario). Las peticiones de acceso o manipulación de información llegan al 'modelo' a través del 'controlador'.12
        </p>
        <p>
        El Controlador: Responde a eventos (usualmente acciones del usuario) e invoca peticiones al 'modelo' cuando se hace alguna solicitud sobre la información (por ejemplo, editar un documento o un registro en una base de datos). También puede enviar comandos a su 'vista' asociada si se solicita un cambio en la forma en que se presenta el 'modelo' (por ejemplo, desplazamiento o scroll por un documento o por los diferentes registros de una base de datos), por tanto se podría decir que el 'controlador' hace de intermediario entre la 'vista' y el 'modelo' (véase Middleware).
        </p>
        <p>
        La Vista: Presenta el 'modelo' (información y lógica de negocio) en un formato adecuado para interactuar (usualmente la interfaz de usuario), por tanto requiere de dicho 'modelo' la información que debe representar como salida.
        </p>",
        "<p>
        MVC es un patrón de diseño que se estructura mediante tres componentes: modelo, vista y controlador. Este patrón tiene como principio que cada uno de los componentes esté separado en diferentes objetos, esto quiere decir que los componentes no se pueden combinar dentro de una misma clase.
        Antes que nada, MVC separa la lógica de negocios y la capa de representación entre sí. Tradicionalmente se utilizaba para interfaces gráficas de usuario de escritorio. Hoy en día, la arquitectura MVC se ha hecho popular para el diseño de aplicaciones Web y aplicaciones mobile.
        </p>
        <p>
        Controlador
        el modelo para el usuario, después el controlador acepta la entrada del usuario y actualiza el modelo y debido a esa acción la vista vuelve a tener un cambio con los datos actualizados.
        </p>",
        "<p>
        Una API o interfaz de programación de aplicaciones es un conjunto de definiciones y protocolos que se usa para diseñar e integrar el software de las aplicaciones.
        Las API permiten que sus productos y servicios se comuniquen con otros, sin necesidad de saber cómo están implementados. Esto simplifica el desarrollo de las aplicaciones y permite ahorrar tiempo y dinero. Las API le otorgan flexibilidad; simplifican el diseño, la administración y el uso de las aplicaciones; y ofrecen oportunidades de innovación, lo cual es ideal al momento de diseñar herramientas y productos nuevos (o de gestionar los actuales).

        </p>
        <p>
        A veces, las API se consideran como contratos, con documentación que representa un acuerdo entre las partes: si una de las partes envía una solicitud remota con cierta estructura en particular, 
        esa misma estructura determinará cómo responderá el software de la otra parte.
        </p>
        <p>
        También permiten la colaboración entre el equipo comercial y el de TI, ya que simplifican la forma en que los desarrolladores integran los elementos de las aplicaciones nuevas en una arquitectura actual. Las necesidades comerciales suelen cambiar rápidamente en respuesta a los mercados digitales en constante cambio, donde la competencia puede modificar un sector entero con una aplicación nueva. Para seguir siendo competitivos, es importante admitir la implementación y el desarrollo rápidos de servicios innovadores. El desarrollo de aplicaciones nativas de la nube es una forma identificable de aumentar la velocidad de desarrollo y se basa en la 
        conexión de una arquitectura de aplicaciones de microservicios a través de las API.
        </p>",
        "<p>
        Una comunicación orientada a la conexión es un modo de comunicación de datos que requiere una sobrecarga para configurar una solicitud de conexión antes de enviar cualquier tipo de mensaje de comunicación de datos. La mayoría de los protocolos de redes informáticas requieren el modo orientado a la conexión (modo CO), a diferencia de la comunicación sin conexión, 
        para garantizar que no se pierdan paquetes. Los protocolos son un conjunto de estándares y reglas que admiten modos específicos de comunicaciones de datos. La comunicación orientada a la conexión se diseñó para garantizar que haya recursos disponibles según lo requiera el tipo de comunicación que se solicita
        </p>",
        "<p>
        Socket designa un concepto abstracto por el cual dos procesos (posiblemente situados en computadoras distintas) pueden intercambiar cualquier flujo de datos, generalmente de manera fiable y ordenada. Además es una estructura de datos que permite que dos máquinas se comuniquen entre ellas.
        </p>
        <p>
        El término socket es también usado como el nombre de una interfaz de programación de aplicaciones (API) para la familia de protocolos de Internet TCP/IP, provista usualmente por el sistema operativo.
        </p>
        <p>
        Los sockets de Internet constituyen el mecanismo para la entrega de paquetes de datos provenientes de la tarjeta de red a los procesos o hilos apropiados. Un socket queda definido por un par de direcciones IP local y remota, un protocolo de transporte y un par de números de puerto local y remoto.
        </p>",
        "<p>
        Para que dos procesos puedan comunicarse entre sí es necesario que se cumplan ciertos requisitos:
        Que un proceso sea capaz de localizar al otro.
        Que ambos procesos sean capaces de intercambiarse cualquier secuencia de octetos, es decir, datos relevantes a su finalidad.
        Para ello son necesarios los dos recursos que originan el concepto de socket:
        Un par de direcciones del protocolo de red (dirección IP, si se utiliza el protocolo TCP/IP), que identifican la computadora de origen y la remota.
        Un par de números de puerto, que identifican a un programa dentro de cada computadora.
        </p>
        <p>
        Los sockets permiten implementar una arquitectura cliente-servidor. La comunicación debe ser iniciada por uno de los procesos que se denomina programa cliente. El segundo proceso espera a que otro inicie la comunicación, por este motivo se denomina programa servidor.
        Un socket es un proceso o hilo existente en la máquina cliente y en la máquina servidora, que sirve en última instancia para que el programa servidor y el cliente lean y escriban la información. Esta información será la transmitida por las diferentes capas de red.
        </p>
        <p>
        Las propiedades de un socket dependen de las características del protocolo en el que se implementan. El protocolo más utilizado es Transmission Control Protocol; una alternativa común a este es User Datagram Protocol.
        Cuando se implementan con el protocolo TCP, los sockets tienen las siguientes propiedades:
        Son orientados a la conexión.
        Se garantiza la transmisión de todos los octetos sin errores ni omisiones.
        Se garantiza que todo octeto llegará a su destino en el mismo orden en que se ha transmitido.    
        </p>"
        ];

        // insertar publicaciones
        for($i =0;$i<9;$i++)
        {
            DB::table('publicaciones')->insert([
                'nombre' =>$temasu1[$i],
                'titulo' =>$tituloeditu1[$i],
                'contenido' =>$contenido1[$i]  
            ]);
            
        }

        for($j =0;$j<8;$j++)
        {
            DB::table('publicaciones')->insert([
                'nombre' =>$temasu2[$j],
                'titulo' =>$tituloeditu2[$j],
                'contenido' =>$contenidoedit2[$j]  
            ]);
            
        }

    }
}
