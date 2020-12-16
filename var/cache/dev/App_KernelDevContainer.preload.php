<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
require __DIR__.'/ContainerROWSiyP/App_KernelDevContainer.php';
require __DIR__.'/ContainerROWSiyP/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerROWSiyP/getValidator_ExpressionService.php';
require __DIR__.'/ContainerROWSiyP/getValidator_EmailService.php';
require __DIR__.'/ContainerROWSiyP/getValidator_BuilderService.php';
require __DIR__.'/ContainerROWSiyP/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerROWSiyP/getSessionService.php';
require __DIR__.'/ContainerROWSiyP/getServicesResetterService.php';
require __DIR__.'/ContainerROWSiyP/getSecrets_VaultService.php';
require __DIR__.'/ContainerROWSiyP/getRouting_LoaderService.php';
require __DIR__.'/ContainerROWSiyP/getPropertyAccessorService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_SerializationContextFactoryService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_MetadataDriverService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_HandlerRegistryService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_DeserializationContextFactoryService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getJmsSerializerService.php';
require __DIR__.'/ContainerROWSiyP/getFosRest_ViewHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getFosRest_Serializer_JmsHandlerRegistry_InnerService.php';
require __DIR__.'/ContainerROWSiyP/getFosRest_Serializer_JmsHandlerRegistryService.php';
require __DIR__.'/ContainerROWSiyP/getFosRest_Serializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getFosRest_Serializer_FlattenExceptionHandlerService.php';
require __DIR__.'/ContainerROWSiyP/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerROWSiyP/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerROWSiyP/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerROWSiyP/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerROWSiyP/getForm_Type_FormService.php';
require __DIR__.'/ContainerROWSiyP/getForm_Type_EntityService.php';
require __DIR__.'/ContainerROWSiyP/getForm_Type_ColorService.php';
require __DIR__.'/ContainerROWSiyP/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerROWSiyP/getForm_RegistryService.php';
require __DIR__.'/ContainerROWSiyP/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerROWSiyP/getErrorControllerService.php';
require __DIR__.'/ContainerROWSiyP/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerROWSiyP/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerROWSiyP/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerROWSiyP/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerROWSiyP/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerROWSiyP/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerROWSiyP/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerROWSiyP/getCache_ValidatorService.php';
require __DIR__.'/ContainerROWSiyP/getCache_SystemClearerService.php';
require __DIR__.'/ContainerROWSiyP/getCache_SystemService.php';
require __DIR__.'/ContainerROWSiyP/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerROWSiyP/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerROWSiyP/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerROWSiyP/getCache_AppClearerService.php';
require __DIR__.'/ContainerROWSiyP/getCache_AppService.php';
require __DIR__.'/ContainerROWSiyP/getCache_AnnotationsService.php';
require __DIR__.'/ContainerROWSiyP/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerROWSiyP/getAnnotations_CacheService.php';
require __DIR__.'/ContainerROWSiyP/getTemplateControllerService.php';
require __DIR__.'/ContainerROWSiyP/getRedirectControllerService.php';
require __DIR__.'/ContainerROWSiyP/getBlogPostRepositoryService.php';
require __DIR__.'/ContainerROWSiyP/getSensorControllerService.php';
require __DIR__.'/ContainerROWSiyP/getHelloWorldControllerService.php';
require __DIR__.'/ContainerROWSiyP/getBrandNewControllerService.php';
require __DIR__.'/ContainerROWSiyP/getBlogControllerService.php';
require __DIR__.'/ContainerROWSiyP/get_ServiceLocator_O7AvvigService.php';
require __DIR__.'/ContainerROWSiyP/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerROWSiyP/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerROWSiyP/get_ServiceLocator_5nX7ca3Service.php';
require __DIR__.'/ContainerROWSiyP/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerROWSiyP/get_Container_Private_Form_Type_FileService.php';
require __DIR__.'/ContainerROWSiyP/get_Container_Private_Form_FactoryService.php';
require __DIR__.'/ContainerROWSiyP/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerROWSiyP/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\BlogController';
$classes[] = 'App\Controller\BrandNewController';
$classes[] = 'App\Controller\HelloWorldController';
$classes[] = 'App\Controller\SensorController';
$classes[] = 'App\Repository\BlogPostRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'FOS\RestBundle\EventListener\FormatListener';
$classes[] = 'FOS\RestBundle\Negotiation\FormatNegotiator';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FlattenExceptionHandler';
$classes[] = 'FOS\RestBundle\Util\ExceptionValueMap';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSHandlerRegistryV2';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\EventDispatcher\LazyEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'JMS\Serializer\Metadata\Driver\TypedPropertiesDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

Preloader::preload($classes);