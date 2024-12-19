<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * demoProdProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class demoProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /*
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            '242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d47_2' => 'get242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d472Service',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.synapse_connection' => 'getDoctrine_Dbal_SynapseConnectionService',
            'doctrine.orm.synapse_entity_listener_resolver' => 'getDoctrine_Orm_SynapseEntityListenerResolverService',
            'doctrine.orm.synapse_entity_manager' => 'getDoctrine_Orm_SynapseEntityManagerService',
            'doctrine.orm.synapse_entity_manager.property_info_extractor' => 'getDoctrine_Orm_SynapseEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.synapse_listeners.attach_entity_listeners' => 'getDoctrine_Orm_SynapseListeners_AttachEntityListenersService',
            'doctrine.orm.synapse_manager_configurator' => 'getDoctrine_Orm_SynapseManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.synapse_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_SynapseMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.synapse_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_SynapseQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.synapse_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_SynapseResultCacheService',
            'esi' => 'getEsiService',
            'esi_listener' => 'getEsiListenerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'majora.clock' => 'getMajora_ClockService',
            'majora.doctrine.event_proxy' => 'getMajora_Doctrine_EventProxyService',
            'majora.inflector' => 'getMajora_InflectorService',
            'majora.loader.bridge.form.type.entity_collection' => 'getMajora_Loader_Bridge_Form_Type_EntityCollectionService',
            'majora.normalizer' => 'getMajora_NormalizerService',
            'majora.serializer' => 'getMajora_SerializerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'synapse' => 'getSynapseService',
            'synapse.admin.twig_extension' => 'getSynapse_Admin_TwigExtensionService',
            'synapse.component.context_builder' => 'getSynapse_Component_ContextBuilderService',
            'synapse.component.decorator' => 'getSynapse_Component_DecoratorService',
            'synapse.component.domain' => 'getSynapse_Component_DomainService',
            'synapse.component.edition_type' => 'getSynapse_Component_EditionTypeService',
            'synapse.component.loader' => 'getSynapse_Component_LoaderService',
            'synapse.component.orm_repository' => 'getSynapse_Component_OrmRepositoryService',
            'synapse.component_type.loader' => 'getSynapse_ComponentType_LoaderService',
            'synapse.content.resolver' => 'getSynapse_Content_ResolverService',
            'synapse.content_type.loader' => 'getSynapse_ContentType_LoaderService',
            'synapse.context.normalizer' => 'getSynapse_Context_NormalizerService',
            'synapse.context.stack' => 'getSynapse_Context_StackService',
            'synapse.file.domain' => 'getSynapse_File_DomainService',
            'synapse.file.orm_loader' => 'getSynapse_File_OrmLoaderService',
            'synapse.file.orm_repository' => 'getSynapse_File_OrmRepositoryService',
            'synapse.formatted_image.domain' => 'getSynapse_FormattedImage_DomainService',
            'synapse.formatted_image.orm_loader' => 'getSynapse_FormattedImage_OrmLoaderService',
            'synapse.formatted_image.orm_repository' => 'getSynapse_FormattedImage_OrmRepositoryService',
            'synapse.image.admin_controller' => 'getSynapse_Image_AdminControllerService',
            'synapse.image.domain' => 'getSynapse_Image_DomainService',
            'synapse.image.form_type' => 'getSynapse_Image_FormTypeService',
            'synapse.image.format.form_type' => 'getSynapse_Image_Format_FormTypeService',
            'synapse.image.format_action' => 'getSynapse_Image_FormatActionService',
            'synapse.image.orm_loader' => 'getSynapse_Image_OrmLoaderService',
            'synapse.image.orm_repository' => 'getSynapse_Image_OrmRepositoryService',
            'synapse.image_choice.form_type' => 'getSynapse_ImageChoice_FormTypeService',
            'synapse.image_format.loader' => 'getSynapse_ImageFormat_LoaderService',
            'synapse.listener.component_request' => 'getSynapse_Listener_ComponentRequestService',
            'synapse.media.admin_controller' => 'getSynapse_Media_AdminControllerService',
            'synapse.media.domain' => 'getSynapse_Media_DomainService',
            'synapse.page.admin_controller' => 'getSynapse_Page_AdminControllerService',
            'synapse.page.creation_form' => 'getSynapse_Page_CreationFormService',
            'synapse.page.doctrine_repository' => 'getSynapse_Page_DoctrineRepositoryService',
            'synapse.page.domain' => 'getSynapse_Page_DomainService',
            'synapse.page.edition_form' => 'getSynapse_Page_EditionFormService',
            'synapse.page.loader' => 'getSynapse_Page_LoaderService',
            'synapse.page.page_menu_item_form' => 'getSynapse_Page_PageMenuItemFormService',
            'synapse.template.domain' => 'getSynapse_Template_DomainService',
            'synapse.template.orm_loader' => 'getSynapse_Template_OrmLoaderService',
            'synapse.template.orm_repository' => 'getSynapse_Template_OrmRepositoryService',
            'synapse.template.type' => 'getSynapse_Template_TypeService',
            'synapse.template_type.loader' => 'getSynapse_TemplateType_LoaderService',
            'synapse.theme.extension' => 'getSynapse_Theme_ExtensionService',
            'synapse.theme.loader' => 'getSynapse_Theme_LoaderService',
            'synapse.theme.matcher' => 'getSynapse_Theme_MatcherService',
            'synapse.theme.type' => 'getSynapse_Theme_TypeService',
            'synapse.variation.resolver' => 'getSynapse_Variation_ResolverService',
            'synapse.zone.domain' => 'getSynapse_Zone_DomainService',
            'synapse.zone.edition_type' => 'getSynapse_Zone_EditionTypeService',
            'synapse.zone.orm_loader' => 'getSynapse_Zone_OrmLoaderService',
            'synapse.zone.orm_repository' => 'getSynapse_Zone_OrmRepositoryService',
            'synapse.zone.renderer' => 'getSynapse_Zone_RendererService',
            'synapse.zone_type.loader' => 'getSynapse_ZoneType_LoaderService',
            'synase.page.validator.unique_path' => 'getSynase_Page_Validator_UniquePathService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator.selector' => 'getTranslator_SelectorService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.synapse_entity_manager',
            'doctrine.orm.synapse_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.synapse_metadata_cache',
            'doctrine.orm.synapse_query_cache' => 'doctrine_cache.providers.doctrine.orm.synapse_query_cache',
            'doctrine.orm.synapse_result_cache' => 'doctrine_cache.providers.doctrine.orm.synapse_result_cache',
            'mailer' => 'swiftmailer.mailer.default',
            'serializer' => 'majora.serializer',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'synapse.file.loader' => 'synapse.file.orm_loader',
            'synapse.formatted_image.loader' => 'synapse.formatted_image.orm_loader',
            'synapse.image.loader' => 'synapse.image.orm_loader',
            'synapse.page.repository' => 'synapse.page.doctrine_repository',
            'synapse.template.loader' => 'synapse.template.orm_loader',
            'synapse.zone.loader' => 'synapse.zone.orm_loader',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), false);
    }

    /*
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /*
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('tRYZszBv4K', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /*
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        $this->services['cache.default_clearer'] = $instance = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();

        $instance->addPool($this->get('cache.app'));
        $instance->addPool($this->get('cache.system'));
        $instance->addPool(${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $instance->addPool(${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('zBA+Rj9JD-', 0, 'vEi8USaL0R31frFl21OJqi', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('cache.default_clearer')));
    }

    /*
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->get('validator.builder'), (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 7 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 8 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /*
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection', 'synapse' => 'doctrine.dbal.synapse_connection'), array('synapse' => 'doctrine.orm.synapse_entity_manager'), 'default', 'synapse');
    }

    /*
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventListener(array(0 => 'postLoad'), 'majora.doctrine.event_proxy');

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'db', 'port' => 3306, 'dbname' => 'symfony', 'user' => 'symfony', 'password' => 'symfony', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }

    /*
     * Gets the 'doctrine.dbal.synapse_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_SynapseConnectionService()
    {
        $a = ${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'};

        $b = new \Gedmo\Tree\TreeListener();
        $b->setAnnotationReader($a);

        $c = new \Gedmo\Timestampable\TimestampableListener();
        $c->setAnnotationReader($a);

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($b);
        $d->addEventSubscriber($c);
        $d->addEventListener(array(0 => 'postLoad'), 'majora.doctrine.event_proxy');
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.synapse_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.synapse_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'db', 'port' => 3306, 'dbname' => 'symfony', 'user' => 'symfony', 'password' => 'symfony', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $d, array());
    }

    /*
     * Gets the 'doctrine.orm.synapse_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_SynapseEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.synapse_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /*
     * Gets the 'doctrine.orm.synapse_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    public function getDoctrine_Orm_SynapseEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.synapse_entity_manager'] = new DoctrineORMEntityManager_0000000012440a83000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_SynapseEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[4].'/src/Synapse/Cmf/Bundle/Resources/config/mapping/orm') => 'Synapse\\Cmf\\Bundle\\Entity\\Orm', ($this->targetDirs[4].'/src/Synapse/Page/Bundle/Resources/config/mapping/orm') => 'Synapse\\Page\\Bundle\\Entity'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'Synapse\\Cmf\\Bundle\\Entity\\Orm');
        $b->addDriver($a, 'Synapse\\Page\\Bundle\\Entity');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('Synapse' => 'Synapse\\Cmf\\Bundle\\Entity\\Orm', 'SynapsePage' => 'Synapse\\Page\\Bundle\\Entity'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.synapse_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.synapse_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.synapse_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.synapse_entity_listener_resolver'));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.synapse_connection'), $c);

        $this->get('doctrine.orm.synapse_manager_configurator')->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'doctrine.orm.synapse_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_SynapseEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.synapse_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.synapse_entity_manager')->getMetadataFactory());
    }

    /*
     * Gets the 'doctrine.orm.synapse_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_SynapseListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.synapse_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the 'doctrine.orm.synapse_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_SynapseManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.synapse_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.synapse_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_SynapseMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.synapse_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_synapse_66993499efdb3308fef6d20b5c1b3992406ce9943a8b2344c205eb91615bc604');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.synapse_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_SynapseQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.synapse_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_synapse_66993499efdb3308fef6d20b5c1b3992406ce9943a8b2344c205eb91615bc604');

        return $instance;
    }

    /*
     * Gets the 'doctrine_cache.providers.doctrine.orm.synapse_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_SynapseResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.synapse_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_synapse_66993499efdb3308fef6d20b5c1b3992406ce9943a8b2344c205eb91615bc604');

        return $instance;
    }

    /*
     * Gets the 'esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpCache\Esi A Symfony\Component\HttpKernel\HttpCache\Esi instance
     */
    protected function getEsiService()
    {
        return $this->services['esi'] = new \Symfony\Component\HttpKernel\HttpCache\Esi();
    }

    /*
     * Gets the 'esi_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SurrogateListener A Symfony\Component\HttpKernel\EventListener\SurrogateListener instance
     */
    protected function getEsiListenerService()
    {
        return $this->services['esi_listener'] = new \Symfony\Component\HttpKernel\EventListener\SurrogateListener($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('kernel.request', array(0 => 'synapse.listener.component_request', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('esi_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SurrogateListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('synapse.file.orm_repository', 'Synapse\\Cmf\\Framework\\Media\\File\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.formatted_image.orm_repository', 'Synapse\\Cmf\\Framework\\Media\\FormattedImage\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.image.orm_repository', 'Synapse\\Cmf\\Framework\\Media\\Image\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.component.orm_repository', 'Synapse\\Cmf\\Framework\\Theme\\Component\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.zone.orm_repository', 'Synapse\\Cmf\\Framework\\Theme\\Zone\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.template.orm_repository', 'Synapse\\Cmf\\Framework\\Theme\\Template\\Repository\\Doctrine\\DoctrineRepository');
        $instance->addSubscriberService('synapse.theme.matcher', 'Synapse\\Cmf\\Bundle\\Distribution\\Theme\\Listener\\ThemeActivationListener');
        $instance->addSubscriberService('synapse.page.doctrine_repository', 'Synapse\\Page\\Bundle\\Repository\\Page\\Doctrine\\DoctrineTreeRepository');

        return $instance;
    }

    /*
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /*
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'Majora\\Framework\\Loader\\Bridge\\Form\\Type\\EntityCollectionType' => 'majora.loader.bridge.form.type.entity_collection', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Theme\\ThemeType' => 'synapse.theme.type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Theme\\TemplateType' => 'synapse.template.type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Theme\\ZoneType' => 'synapse.zone.edition_type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Theme\\ComponentType' => 'synapse.component.edition_type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Media\\ImageType' => 'synapse.image.form_type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Media\\ImageChoiceType' => 'synapse.image_choice.form_type', 'Synapse\\Cmf\\Bundle\\Form\\Type\\Media\\FormatType' => 'synapse.image.format.form_type', 'Synapse\\Page\\Bundle\\Form\\Page\\CreationType' => 'synapse.page.creation_form', 'Synapse\\Page\\Bundle\\Form\\Page\\EditionType' => 'synapse.page.edition_form', 'Synapse\\Page\\Bundle\\Form\\PageMenu\\PageMenuItemType' => 'synapse.page.page_menu_item_form'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'synapse.theme.extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory A Symfony\Component\Form\ResolvedFormTypeFactory instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /*
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /*
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /*
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /*
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /*
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /*
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer($this->get('esi', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver($this->get('security.token_storage')), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 4 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())));
    }

    /*
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel', 6 => 'Symfony\\Component\\ClassLoader\\ClassCollectionLoader', 7 => 'Symfony\\Component\\ClassLoader\\ApcClassLoader'));
    }

    /*
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'majora.clock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Date\Clock A Majora\Framework\Date\Clock instance
     */
    protected function getMajora_ClockService()
    {
        return $this->services['majora.clock'] = new \Majora\Framework\Date\Clock();
    }

    /*
     * Gets the 'majora.doctrine.event_proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Loader\Bridge\Doctrine\DoctrineEventProxy A Majora\Framework\Loader\Bridge\Doctrine\DoctrineEventProxy instance
     */
    protected function getMajora_Doctrine_EventProxyService()
    {
        $this->services['majora.doctrine.event_proxy'] = $instance = new \Majora\Framework\Loader\Bridge\Doctrine\DoctrineEventProxy();

        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\File', $this->get('synapse.file.orm_loader'));
        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\FormattedImage', $this->get('synapse.formatted_image.orm_loader'));
        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Image', $this->get('synapse.image.orm_loader'));
        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Component', $this->get('synapse.component.loader'));
        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Zone', $this->get('synapse.zone.orm_loader'));
        $instance->registerDoctrineLazyLoader('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Template', $this->get('synapse.template.orm_loader'));

        return $instance;
    }

    /*
     * Gets the 'majora.inflector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Inflector\Inflector A Majora\Framework\Inflector\Inflector instance
     */
    protected function getMajora_InflectorService()
    {
        return $this->services['majora.inflector'] = new \Majora\Framework\Inflector\Inflector();
    }

    /*
     * Gets the 'majora.loader.bridge.form.type.entity_collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Loader\Bridge\Form\Type\EntityCollectionType A Majora\Framework\Loader\Bridge\Form\Type\EntityCollectionType instance
     */
    protected function getMajora_Loader_Bridge_Form_Type_EntityCollectionService()
    {
        return $this->services['majora.loader.bridge.form.type.entity_collection'] = new \Majora\Framework\Loader\Bridge\Form\Type\EntityCollectionType();
    }

    /*
     * Gets the 'majora.normalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Normalizer\MajoraNormalizer A Majora\Framework\Normalizer\MajoraNormalizer instance
     */
    protected function getMajora_NormalizerService()
    {
        return $this->services['majora.normalizer'] = new \Majora\Framework\Normalizer\MajoraNormalizer($this->get('property_accessor'));
    }

    /*
     * Gets the 'majora.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Majora\Framework\Serializer\MajoraSerializer A Majora\Framework\Serializer\MajoraSerializer instance
     */
    protected function getMajora_SerializerService()
    {
        $a = $this->get('majora.normalizer');

        $this->services['majora.serializer'] = $instance = new \Majora\Framework\Serializer\MajoraSerializer(array('json' => new \Majora\Framework\Serializer\Handler\Json\JsonHandler($a), 'yaml' => new \Majora\Framework\Serializer\Handler\Yaml\YamlHandler(new \Symfony\Component\Yaml\Yaml(), $a)));

        $instance->registerFormatHandler('array', new \Majora\Framework\Serializer\Handler\Collection\CollectionHandler());

        return $instance;
    }

    /*
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /*
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.nested' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('GpVGfoRSO1', NULL, 'vEi8USaL0R31frFl21OJqi', $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /*
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'demoProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'demoProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = ${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'};

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /*
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /*
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array());
    }

    /*
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => NULL)), $this->get('event_dispatcher'));
    }

    /*
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /*
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};
        $e = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $f = new \Symfony\Component\Security\Http\AccessMap();

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($f, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => new \Symfony\Component\Security\Core\User\InMemoryUserProvider()), 'main', $a, $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '67642ae91cb8a1.48652831', $a, $d), 3 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, $f, $d)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $c, new \Symfony\Component\Security\Http\HttpUtils($e, $e), 'main', NULL, NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'security.user.provider.concrete.in_memory', 'main', NULL, NULL, NULL, array(0 => 'anonymous')));
    }

    /*
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'});
    }

    /*
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        $instance->add($this->get('synapse.image.admin_controller'), 10, 'image');
        $instance->add($this->get('synapse.page.admin_controller'), 10, 'page');

        return $instance;
    }

    /*
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[2].'/../../var/sessions/prod'));
    }

    /*
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /*
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the 'stof_doctrine_extensions.uploadable.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager A Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager instance
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'});
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /*
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.spool' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_MemorySpool A Swift_MemorySpool instance
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_SpoolTransport A Swift_Transport_SpoolTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, $this->get('swiftmailer.mailer.default.spool'));
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.real' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'synapse' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Engine\Engine A Synapse\Cmf\Framework\Engine\Engine instance
     */
    public function getSynapseService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse'] = new SynapseCmfFrameworkEngineEngine_00000000124408d4000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapseService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Synapse\Cmf\Framework\Engine\Engine(new \Synapse\Cmf\Framework\Engine\Resolver\ThemeResolver($this->get('synapse.theme.loader')), ${($_ = isset($this->services['242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d47_2']) ? $this->services['242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d47_2'] : $this->get242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d472Service()) && false ?: '_'}, ${($_ = isset($this->services['synapse.component.decorator']) ? $this->services['synapse.component.decorator'] : $this->getSynapse_Component_DecoratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.admin.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Admin\Bundle\Twig\Extension\AdminExtension A Synapse\Admin\Bundle\Twig\Extension\AdminExtension instance
     */
    protected function getSynapse_Admin_TwigExtensionService()
    {
        return $this->services['synapse.admin.twig_extension'] = new \Synapse\Admin\Bundle\Twig\Extension\AdminExtension(new \Synapse\Admin\Bundle\SynapseAdmin('SynapsePageBundle::base.html.twig', NULL));
    }

    /*
     * Gets the 'synapse.component.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Component\Domain\ComponentDomain A Synapse\Cmf\Framework\Theme\Component\Domain\ComponentDomain instance
     */
    protected function getSynapse_Component_DomainService()
    {
        $a = $this->get('event_dispatcher');
        $b = $this->get('validator');

        $c = new \Synapse\Cmf\Framework\Theme\Component\Domain\Command\CreateCommand('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Component');
        $c->setEventDispatcher($a);
        $c->setValidator($b);

        $d = new \Synapse\Cmf\Framework\Theme\Component\Domain\Command\UpdateCommand();
        $d->setEventDispatcher($a);
        $d->setValidator($b);

        $e = new \Synapse\Cmf\Framework\Theme\Component\Domain\Command\DeleteCommand();
        $e->setEventDispatcher($a);

        return $this->services['synapse.component.domain'] = new \Synapse\Cmf\Framework\Theme\Component\Domain\ComponentDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('create' => $c, 'update' => $d, 'delete' => $e)));
    }

    /*
     * Gets the 'synapse.component.edition_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Theme\ComponentType A Synapse\Cmf\Bundle\Form\Type\Theme\ComponentType instance
     */
    protected function getSynapse_Component_EditionTypeService()
    {
        return $this->services['synapse.component.edition_type'] = new \Synapse\Cmf\Bundle\Form\Type\Theme\ComponentType($this->get('synapse.component.domain'));
    }

    /*
     * Gets the 'synapse.component.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\ComponentOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\ComponentOrmLoader instance
     */
    public function getSynapse_Component_LoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.component.loader'] = new SynapseCmfBundleLoaderOrmComponentOrmLoader_0000000012440a93000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Component_LoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\ComponentOrmLoader($this->get('synapse.component_type.loader'));

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Component', array(0 => 'componentTypeId', 1 => 'zone', 2 => 'id', 3 => 'componentType', 4 => 'data', 5 => 'ranking', 6 => 'createdAt', 7 => 'updatedAt', 8 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Theme\\Component\\Entity\\ComponentCollection');
        $instance->setEntityRepository($this->get('synapse.component.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.component.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Component\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Theme\Component\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_Component_OrmRepositoryService()
    {
        return $this->services['synapse.component.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:Component', 'synapse');
    }

    /*
     * Gets the 'synapse.component_type.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\ComponentType\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Theme\ComponentType\Loader\InMemory\InMemoryLoader instance
     */
    protected function getSynapse_ComponentType_LoaderService()
    {
        $this->services['synapse.component_type.loader'] = $instance = new \Synapse\Cmf\Framework\Theme\ComponentType\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Theme\\ComponentType\\Entity\\ComponentTypeCollection', $this->get('majora.normalizer'));

        $instance->registerData(array(0 => array('id' => 'free', 'name' => 'free', 'controller' => 'SynapseCmfBundle:FreeComponent:render', 'template_path' => 'SynapseCmfBundle:Component:free.html.twig', 'form_type' => 'Synapse\\Cmf\\Bundle\\Form\\Type\\Component\\FreeType'), 1 => array('id' => 'static', 'name' => 'static', 'controller' => 'SynapseCmfBundle:StaticComponent:render', 'template_path' => 'SynapseCmfBundle:Component:static.html.twig', 'form_type' => 'Synapse\\Cmf\\Bundle\\Form\\Type\\Component\\StaticType'), 2 => array('id' => 'text', 'name' => 'text', 'controller' => 'SynapseCmfBundle:TextComponent:render', 'template_path' => 'SynapseCmfBundle:Component:text.html.twig', 'form_type' => 'Synapse\\Cmf\\Bundle\\Form\\Type\\Component\\TextType'), 3 => array('id' => 'menu', 'name' => 'menu', 'controller' => 'SynapseCmfBundle:MenuComponent:render', 'template_path' => 'SynapseCmfBundle:Component:menu.html.twig', 'form_type' => 'Synapse\\Cmf\\Bundle\\Form\\Type\\Component\\MenuType'), 4 => array('id' => 'gallery', 'name' => 'gallery', 'controller' => 'SynapseCmfBundle:GalleryComponent:render', 'template_path' => 'SynapseCmfBundle:Component:gallery.html.twig', 'form_type' => 'Synapse\\Cmf\\Bundle\\Form\\Type\\Component\\GalleryType'), 5 => array('id' => 'page_menu', 'name' => 'page_menu', 'controller' => 'SynapsePageBundle:PageMenuContent:render', 'template_path' => 'SynapsePageBundle:Admin/PageMenu:page_menu.html.twig', 'form_type' => 'Synapse\\Page\\Bundle\\Form\\PageMenu\\PageMenuType')));

        return $instance;
    }

    /*
     * Gets the 'synapse.content_type.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\ContentType\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Theme\ContentType\Loader\InMemory\InMemoryLoader instance
     */
    protected function getSynapse_ContentType_LoaderService()
    {
        $this->services['synapse.content_type.loader'] = $instance = new \Synapse\Cmf\Framework\Theme\ContentType\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Theme\\ContentType\\Entity\\ContentTypeCollection', $this->get('majora.normalizer'));

        $instance->registerData(array(0 => array('id' => 'page', 'name' => 'page', 'contentClass' => 'Synapse\\Page\\Bundle\\Entity\\Page', 'contentProvider' => $this->get('synapse.page.loader'))));

        return $instance;
    }

    /*
     * Gets the 'synapse.file.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\File\Domain\Action\ActionDispatcherDomain A Synapse\Cmf\Framework\Media\File\Domain\Action\ActionDispatcherDomain instance
     */
    protected function getSynapse_File_DomainService()
    {
        $a = $this->get('synapse.file.orm_loader');
        $b = $this->get('filesystem');
        $c = $this->get('majora.inflector');
        $d = $this->get('event_dispatcher');
        $e = $this->get('validator');

        $f = new \Synapse\Cmf\Framework\Media\File\Action\Dal\UploadAction($a, $b, $c, ($this->targetDirs[2].'/../../web/assets/demo/'), 'Synapse\\Cmf\\Bundle\\Entity\\Orm\\File');
        $f->setEventDispatcher($d);
        $f->setValidator($e);

        $g = new \Synapse\Cmf\Framework\Media\File\Action\Dal\CreateAction($a, $b, $c, ($this->targetDirs[2].'/../../web/assets/demo/'), 'Synapse\\Cmf\\Bundle\\Entity\\Orm\\File');
        $g->setEventDispatcher($d);
        $g->setValidator($e);

        return $this->services['synapse.file.domain'] = new \Synapse\Cmf\Framework\Media\File\Domain\Action\ActionDispatcherDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('upload' => $f, 'create' => $g)));
    }

    /*
     * Gets the 'synapse.file.orm_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\FileOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\FileOrmLoader instance
     */
    public function getSynapse_File_OrmLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.file.orm_loader'] = new SynapseCmfBundleLoaderOrmFileOrmLoader_0000000012440a8d000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_File_OrmLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\FileOrmLoader($this->get('filesystem'), ($this->targetDirs[2].'/../../web/assets/demo/'));

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\File', array(0 => 'id', 1 => 'storePath', 2 => 'physicalFile', 3 => 'name', 4 => 'originalName', 5 => 'createdAt', 6 => 'updatedAt', 7 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Media\\File\\Entity\\FileCollection');
        $instance->setEntityRepository($this->get('synapse.file.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.file.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\File\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Media\File\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_File_OrmRepositoryService()
    {
        return $this->services['synapse.file.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:File', 'synapse');
    }

    /*
     * Gets the 'synapse.formatted_image.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\FormattedImage\Domain\Action\ActionDispatcherDomain A Synapse\Cmf\Framework\Media\FormattedImage\Domain\Action\ActionDispatcherDomain instance
     */
    protected function getSynapse_FormattedImage_DomainService()
    {
        $a = new \Synapse\Cmf\Framework\Media\FormattedImage\Action\Dal\CreateAction('Synapse\\Cmf\\Bundle\\Entity\\Orm\\FormattedImage', $this->get('synapse.formatted_image.orm_loader'), $this->get('majora.inflector'), $this->get('filesystem'), new \Imagine\Imagick\Imagine(), $this->get('synapse.file.domain'));
        $a->setEventDispatcher($this->get('event_dispatcher'));
        $a->setValidator($this->get('validator'));

        return $this->services['synapse.formatted_image.domain'] = new \Synapse\Cmf\Framework\Media\FormattedImage\Domain\Action\ActionDispatcherDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('create' => $a)));
    }

    /*
     * Gets the 'synapse.formatted_image.orm_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\FormattedImageOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\FormattedImageOrmLoader instance
     */
    public function getSynapse_FormattedImage_OrmLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.formatted_image.orm_loader'] = new SynapseCmfBundleLoaderOrmFormattedImageOrmLoader_0000000012440a8a000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_FormattedImage_OrmLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\FormattedImageOrmLoader($this->get('synapse.image_format.loader'), 'assets/demo');

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\FormattedImage', array(0 => 'formatId', 1 => 'assetsWebPath', 2 => 'image', 3 => 'id', 4 => 'format', 5 => 'origin', 6 => 'name', 7 => 'title', 8 => 'externalLink', 9 => 'file', 10 => 'createdAt', 11 => 'updatedAt', 12 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Media\\FormattedImage\\Entity\\FormattedImageCollection');
        $instance->setEntityRepository($this->get('synapse.formatted_image.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.formatted_image.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\FormattedImage\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Media\FormattedImage\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_FormattedImage_OrmRepositoryService()
    {
        return $this->services['synapse.formatted_image.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:FormattedImage', 'synapse');
    }

    /*
     * Gets the 'synapse.image.admin_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Admin\Bundle\Controller\ImageAdminController A Synapse\Admin\Bundle\Controller\ImageAdminController instance
     */
    protected function getSynapse_Image_AdminControllerService()
    {
        $this->services['synapse.image.admin_controller'] = $instance = new \Synapse\Admin\Bundle\Controller\ImageAdminController();

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the 'synapse.image.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\Image\Domain\Action\ActionDispatcherDomain A Synapse\Cmf\Framework\Media\Image\Domain\Action\ActionDispatcherDomain instance
     */
    protected function getSynapse_Image_DomainService()
    {
        $a = $this->get('synapse.file.domain');
        $b = $this->get('event_dispatcher');
        $c = $this->get('validator');

        $d = new \Synapse\Cmf\Framework\Media\Image\Action\Dal\UploadAction($a, 'Synapse\\Cmf\\Bundle\\Entity\\Orm\\Image');
        $d->setEventDispatcher($b);
        $d->setValidator($c);

        $e = new \Synapse\Cmf\Framework\Media\Image\Action\Dal\CreateAction($a, 'Synapse\\Cmf\\Bundle\\Entity\\Orm\\Image');
        $e->setEventDispatcher($b);
        $e->setValidator($c);

        $f = new \Synapse\Cmf\Framework\Media\Image\Action\Dal\UpdateAction($a, 'Synapse\\Cmf\\Bundle\\Entity\\Orm\\Image');
        $f->setEventDispatcher($b);
        $f->setValidator($c);

        return $this->services['synapse.image.domain'] = new \Synapse\Cmf\Framework\Media\Image\Domain\Action\ActionDispatcherDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('upload' => $d, 'create' => $e, 'edit' => $f, 'format' => $this->get('synapse.image.format_action'))));
    }

    /*
     * Gets the 'synapse.image.form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Media\ImageType A Synapse\Cmf\Bundle\Form\Type\Media\ImageType instance
     */
    protected function getSynapse_Image_FormTypeService()
    {
        return $this->services['synapse.image.form_type'] = new \Synapse\Cmf\Bundle\Form\Type\Media\ImageType($this->get('synapse.image.domain'));
    }

    /*
     * Gets the 'synapse.image.format.form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Media\FormatType A Synapse\Cmf\Bundle\Form\Type\Media\FormatType instance
     */
    protected function getSynapse_Image_Format_FormTypeService()
    {
        return $this->services['synapse.image.format.form_type'] = new \Synapse\Cmf\Bundle\Form\Type\Media\FormatType($this->get('synapse.image.domain'));
    }

    /*
     * Gets the 'synapse.image.format_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\Image\Action\Dal\FormatAction A Synapse\Cmf\Framework\Media\Image\Action\Dal\FormatAction instance
     */
    protected function getSynapse_Image_FormatActionService()
    {
        $this->services['synapse.image.format_action'] = $instance = new \Synapse\Cmf\Framework\Media\Image\Action\Dal\FormatAction($this->get('synapse.formatted_image.domain'));

        $instance->setEventDispatcher($this->get('event_dispatcher'));
        $instance->setValidator($this->get('validator'));

        return $instance;
    }

    /*
     * Gets the 'synapse.image.orm_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\ImageOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\ImageOrmLoader instance
     */
    public function getSynapse_Image_OrmLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.image.orm_loader'] = new SynapseCmfBundleLoaderOrmImageOrmLoader_0000000012440a95000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Image_OrmLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\ImageOrmLoader('assets/demo');

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Image', array(0 => 'assetsWebPath', 1 => 'id', 2 => 'type', 3 => 'defaultFormat', 4 => 'tags', 5 => 'headline', 6 => 'alt', 7 => 'formattedImages', 8 => 'name', 9 => 'title', 10 => 'externalLink', 11 => 'file', 12 => 'createdAt', 13 => 'updatedAt', 14 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Media\\Image\\Entity\\ImageCollection');
        $instance->setEntityRepository($this->get('synapse.image.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.image.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\Image\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Media\Image\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_Image_OrmRepositoryService()
    {
        return $this->services['synapse.image.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:Image', 'synapse');
    }

    /*
     * Gets the 'synapse.image_choice.form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Media\ImageChoiceType A Synapse\Cmf\Bundle\Form\Type\Media\ImageChoiceType instance
     */
    protected function getSynapse_ImageChoice_FormTypeService()
    {
        return $this->services['synapse.image_choice.form_type'] = new \Synapse\Cmf\Bundle\Form\Type\Media\ImageChoiceType($this->get('synapse.image.orm_loader'), $this->get('synapse.image_format.loader'));
    }

    /*
     * Gets the 'synapse.image_format.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Media\Format\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Media\Format\Loader\InMemory\InMemoryLoader instance
     */
    public function getSynapse_ImageFormat_LoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.image_format.loader'] = new SynapseCmfFrameworkMediaFormatLoaderInMemoryInMemoryLoader_0000000012440a89000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_ImageFormat_LoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Framework\Media\Format\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Media\\Format\\Entity\\FormatCollection', $this->get('majora.normalizer'));

        $instance->registerData(array());

        return $instance;
    }

    /*
     * Gets the 'synapse.listener.component_request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Distribution\Component\Listener\ComponentRequestListener A Synapse\Cmf\Bundle\Distribution\Component\Listener\ComponentRequestListener instance
     */
    protected function getSynapse_Listener_ComponentRequestService()
    {
        return $this->services['synapse.listener.component_request'] = new \Synapse\Cmf\Bundle\Distribution\Component\Listener\ComponentRequestListener(${($_ = isset($this->services['synapse.context.stack']) ? $this->services['synapse.context.stack'] : $this->getSynapse_Context_StackService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.component.decorator']) ? $this->services['synapse.component.decorator'] : $this->getSynapse_Component_DecoratorService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.context.normalizer']) ? $this->services['synapse.context.normalizer'] : $this->getSynapse_Context_NormalizerService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.media.admin_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Admin\Bundle\Controller\MediaAdminController A Synapse\Admin\Bundle\Controller\MediaAdminController instance
     */
    protected function getSynapse_Media_AdminControllerService()
    {
        $this->services['synapse.media.admin_controller'] = $instance = new \Synapse\Admin\Bundle\Controller\MediaAdminController();

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the 'synapse.media.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Media\Media\Domain\ProxyDomain A Synapse\Cmf\Framework\Media\Media\Domain\ProxyDomain instance
     */
    protected function getSynapse_Media_DomainService()
    {
        return $this->services['synapse.media.domain'] = new \Synapse\Cmf\Framework\Media\Media\Domain\ProxyDomain(array('jpg,jpeg,png,gif,tiff' => $this->get('synapse.image.domain')));
    }

    /*
     * Gets the 'synapse.page.admin_controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Controller\PageAdminController A Synapse\Page\Bundle\Controller\PageAdminController instance
     */
    protected function getSynapse_Page_AdminControllerService()
    {
        $this->services['synapse.page.admin_controller'] = $instance = new \Synapse\Page\Bundle\Controller\PageAdminController();

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the 'synapse.page.creation_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Form\Page\CreationType A Synapse\Page\Bundle\Form\Page\CreationType instance
     */
    protected function getSynapse_Page_CreationFormService()
    {
        return $this->services['synapse.page.creation_form'] = new \Synapse\Page\Bundle\Form\Page\CreationType($this->get('synapse.page.domain'), $this->get('synapse.page.loader'));
    }

    /*
     * Gets the 'synapse.page.doctrine_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Repository\Page\Doctrine\DoctrineTreeRepository A Synapse\Page\Bundle\Repository\Page\Doctrine\DoctrineTreeRepository instance
     */
    protected function getSynapse_Page_DoctrineRepositoryService()
    {
        return $this->services['synapse.page.doctrine_repository'] = $this->get('doctrine')->getRepository('SynapsePage:Page', 'synapse');
    }

    /*
     * Gets the 'synapse.page.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Domain\Page\Action\ActionDispatcherDomain A Synapse\Page\Bundle\Domain\Page\Action\ActionDispatcherDomain instance
     */
    protected function getSynapse_Page_DomainService()
    {
        $a = $this->get('event_dispatcher');
        $b = $this->get('validator');

        $c = new \Synapse\Page\Bundle\Action\Page\CreateAction(new \Synapse\Page\Bundle\Generator\SluggedPathGenerator($this->get('majora.inflector')));
        $c->setEventDispatcher($a);
        $c->setValidator($b);

        $d = new \Synapse\Page\Bundle\Action\Page\UpdateAction();
        $d->setEventDispatcher($a);
        $d->setValidator($b);

        $e = new \Synapse\Page\Bundle\Action\Page\DeleteAction();
        $e->setEventDispatcher($a);

        return $this->services['synapse.page.domain'] = new \Synapse\Page\Bundle\Domain\Page\Action\ActionDispatcherDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('create' => $c, 'update' => $d, 'delete' => $e)));
    }

    /*
     * Gets the 'synapse.page.edition_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Form\Page\EditionType A Synapse\Page\Bundle\Form\Page\EditionType instance
     */
    protected function getSynapse_Page_EditionFormService()
    {
        return $this->services['synapse.page.edition_form'] = new \Synapse\Page\Bundle\Form\Page\EditionType($this->get('synapse.page.domain'));
    }

    /*
     * Gets the 'synapse.page.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Loader\Page\Doctrine\DoctrineLoader A Synapse\Page\Bundle\Loader\Page\Doctrine\DoctrineLoader instance
     */
    protected function getSynapse_Page_LoaderService()
    {
        $this->services['synapse.page.loader'] = $instance = new \Synapse\Page\Bundle\Loader\Page\Doctrine\DoctrineLoader();

        $instance->configureMetadata('Synapse\\Page\\Bundle\\Entity\\Page', array(0 => 'id', 1 => 'name', 2 => 'slug', 3 => 'parent', 4 => 'path', 5 => 'online', 6 => 'children', 7 => 'title', 8 => 'meta', 9 => 'openGraph', 10 => 'lft', 11 => 'lvl', 12 => 'rgt', 13 => 'root', 14 => 'createdAt', 15 => 'updatedAt'), 'Synapse\\Page\\Bundle\\Entity\\PageCollection');
        $instance->setEntityRepository($this->get('synapse.page.doctrine_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.page.page_menu_item_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Form\PageMenu\PageMenuItemType A Synapse\Page\Bundle\Form\PageMenu\PageMenuItemType instance
     */
    protected function getSynapse_Page_PageMenuItemFormService()
    {
        return $this->services['synapse.page.page_menu_item_form'] = new \Synapse\Page\Bundle\Form\PageMenu\PageMenuItemType($this->get('synapse.page.loader'));
    }

    /*
     * Gets the 'synapse.template.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Template\Domain\TemplateDomain A Synapse\Cmf\Framework\Theme\Template\Domain\TemplateDomain instance
     */
    protected function getSynapse_Template_DomainService()
    {
        $a = $this->get('synapse.zone.domain');
        $b = $this->get('event_dispatcher');
        $c = $this->get('validator');

        $d = new \Synapse\Cmf\Framework\Theme\Template\Domain\Command\CreateGlobalCommand('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Template');
        $d->setZoneDomain($a);
        $d->setEventDispatcher($b);
        $d->setValidator($c);

        $e = new \Synapse\Cmf\Framework\Theme\Template\Domain\Command\CreateLocalCommand('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Template');
        $e->setZoneDomain($a);
        $e->setEventDispatcher($b);
        $e->setValidator($c);

        $f = new \Synapse\Cmf\Framework\Theme\Template\Domain\Command\UpdateCommand();
        $f->setZoneDomain($a);
        $f->setEventDispatcher($b);
        $f->setValidator($c);

        $g = new \Synapse\Cmf\Framework\Theme\Template\Domain\Command\DeleteCommand();
        $g->setEventDispatcher($b);

        return $this->services['synapse.template.domain'] = new \Synapse\Cmf\Framework\Theme\Template\Domain\TemplateDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('create_global' => $d, 'create_local' => $e, 'update' => $f, 'delete' => $g)), ${($_ = isset($this->services['synapse.content.resolver']) ? $this->services['synapse.content.resolver'] : $this->getSynapse_Content_ResolverService()) && false ?: '_'}, $this->get('synapse.content_type.loader'), $this->get('synapse.template_type.loader'));
    }

    /*
     * Gets the 'synapse.template.orm_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\TemplateOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\TemplateOrmLoader instance
     */
    public function getSynapse_Template_OrmLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.template.orm_loader'] = new SynapseCmfBundleLoaderOrmTemplateOrmLoader_0000000012440a99000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Template_OrmLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\TemplateOrmLoader($this->get('synapse.template_type.loader'), $this->get('synapse.content_type.loader'), $this->get('synapse.zone.orm_loader'), $this->get('synapse.zone.domain'));

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Template', array(0 => 'contentTypeName', 1 => 'contentId', 2 => 'templateTypeId', 3 => 'id', 4 => 'scope', 5 => 'templateType', 6 => 'content', 7 => 'contentType', 8 => 'globalTemplate', 9 => 'zones', 10 => 'createdAt', 11 => 'updatedAt', 12 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Theme\\Template\\Entity\\TemplateCollection');
        $instance->setEntityRepository($this->get('synapse.template.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.template.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Template\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Theme\Template\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_Template_OrmRepositoryService()
    {
        return $this->services['synapse.template.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:Template', 'synapse');
    }

    /*
     * Gets the 'synapse.template.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Theme\TemplateType A Synapse\Cmf\Bundle\Form\Type\Theme\TemplateType instance
     */
    protected function getSynapse_Template_TypeService()
    {
        return $this->services['synapse.template.type'] = new \Synapse\Cmf\Bundle\Form\Type\Theme\TemplateType($this->get('synapse.template.domain'), ${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.template_type.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Theme\TemplateType\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Theme\TemplateType\Loader\InMemory\InMemoryLoader instance
     */
    public function getSynapse_TemplateType_LoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.template_type.loader'] = new SynapseCmfFrameworkThemeTemplateTypeLoaderInMemoryInMemoryLoader_0000000012440a98000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_TemplateType_LoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Framework\Theme\TemplateType\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Theme\\TemplateType\\Entity\\TemplateTypeCollection', $this->get('majora.normalizer'), $this->get('synapse.zone_type.loader'));

        $instance->registerTemplateType(array('id' => 'bootstrap.page', 'name' => 'page', 'zones' => array(0 => 'bootstrap.page.top', 1 => 'bootstrap.page.jumbotron', 2 => 'bootstrap.page.content', 3 => 'bootstrap.page.footer')));
        $instance->registerTemplateType(array('id' => 'bootstrap.demo', 'name' => 'demo', 'zones' => array(0 => 'bootstrap.demo.jumbotron', 1 => 'bootstrap.demo.content')));

        return $instance;
    }

    /*
     * Gets the 'synapse.theme.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Extension\ThemeExtension A Synapse\Cmf\Bundle\Form\Extension\ThemeExtension instance
     */
    protected function getSynapse_Theme_ExtensionService()
    {
        return $this->services['synapse.theme.extension'] = new \Synapse\Cmf\Bundle\Form\Extension\ThemeExtension($this->get('synapse.theme.loader'), ${($_ = isset($this->services['synapse.content.resolver']) ? $this->services['synapse.content.resolver'] : $this->getSynapse_Content_ResolverService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.theme.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Theme\Theme\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Theme\Theme\Loader\InMemory\InMemoryLoader instance
     */
    public function getSynapse_Theme_LoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.theme.loader'] = new SynapseCmfFrameworkThemeThemeLoaderInMemoryInMemoryLoader_0000000012440ae4000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Theme_LoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Framework\Theme\Theme\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Theme\\Theme\\Entity\\ThemeCollection', $this->get('majora.normalizer'), $this->get('synapse.template_type.loader'), $this->get('synapse.image_format.loader'));

        $instance->registerTheme(array('id' => 'bootstrap', 'name' => 'bootstrap', 'templates' => array(0 => 'bootstrap.page', 1 => 'bootstrap.demo'), 'image_formats' => array()));

        return $instance;
    }

    /*
     * Gets the 'synapse.theme.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Distribution\Theme\Listener\ThemeActivationListener A Synapse\Cmf\Bundle\Distribution\Theme\Listener\ThemeActivationListener instance
     */
    protected function getSynapse_Theme_MatcherService()
    {
        return $this->services['synapse.theme.matcher'] = new \Synapse\Cmf\Bundle\Distribution\Theme\Listener\ThemeActivationListener($this->get('router'), $this->get('synapse'), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage());
    }

    /*
     * Gets the 'synapse.theme.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Theme\ThemeType A Synapse\Cmf\Bundle\Form\Type\Theme\ThemeType instance
     */
    protected function getSynapse_Theme_TypeService()
    {
        return $this->services['synapse.theme.type'] = new \Synapse\Cmf\Bundle\Form\Type\Theme\ThemeType(${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'}, $this->get('synapse.template.orm_loader'));
    }

    /*
     * Gets the 'synapse.zone.domain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Zone\Domain\ZoneDomain A Synapse\Cmf\Framework\Theme\Zone\Domain\ZoneDomain instance
     */
    protected function getSynapse_Zone_DomainService()
    {
        $a = $this->get('event_dispatcher');
        $b = $this->get('validator');
        $c = $this->get('synapse.component.domain');

        $d = new \Synapse\Cmf\Framework\Theme\Zone\Domain\Command\CreateCommand('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Zone');
        $d->setEventDispatcher($a);
        $d->setValidator($b);

        $e = new \Synapse\Cmf\Framework\Theme\Zone\Domain\Command\UpdateCommand();
        $e->setEventDispatcher($a);
        $e->setValidator($b);

        $f = new \Synapse\Cmf\Framework\Theme\Zone\Domain\Command\AddComponentCommand($c);
        $f->setEventDispatcher($a);
        $f->setValidator($b);

        $g = new \Synapse\Cmf\Framework\Theme\Zone\Domain\Command\RemoveComponentCommand($c);
        $g->setEventDispatcher($a);
        $g->setValidator($b);

        return $this->services['synapse.zone.domain'] = new \Synapse\Cmf\Framework\Theme\Zone\Domain\ZoneDomain(new \Majora\Framework\Domain\Action\ActionFactory(array('create' => $d, 'update' => $e, 'add_component' => $f, 'remove_component' => $g)));
    }

    /*
     * Gets the 'synapse.zone.edition_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Bundle\Form\Type\Theme\ZoneType A Synapse\Cmf\Bundle\Form\Type\Theme\ZoneType instance
     */
    protected function getSynapse_Zone_EditionTypeService()
    {
        return $this->services['synapse.zone.edition_type'] = new \Synapse\Cmf\Bundle\Form\Type\Theme\ZoneType($this->get('synapse.zone.domain'), ${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.zone.orm_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Bundle\Loader\Orm\ZoneOrmLoader A Synapse\Cmf\Bundle\Loader\Orm\ZoneOrmLoader instance
     */
    public function getSynapse_Zone_OrmLoaderService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.zone.orm_loader'] = new SynapseCmfBundleLoaderOrmZoneOrmLoader_0000000012440a9e000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Zone_OrmLoaderService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $instance = new \Synapse\Cmf\Bundle\Loader\Orm\ZoneOrmLoader($this->get('synapse.zone_type.loader'));

        $instance->configureMetadata('Synapse\\Cmf\\Bundle\\Entity\\Orm\\Zone', array(0 => 'zoneTypeId', 1 => 'template', 2 => 'id', 3 => 'zoneType', 4 => 'components', 5 => 'createdAt', 6 => 'updatedAt', 7 => 'delegatesCollection'), 'Synapse\\Cmf\\Framework\\Theme\\Zone\\Entity\\ZoneCollection');
        $instance->setEntityRepository($this->get('synapse.zone.orm_repository'));

        return $instance;
    }

    /*
     * Gets the 'synapse.zone.orm_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\Zone\Repository\Doctrine\DoctrineRepository A Synapse\Cmf\Framework\Theme\Zone\Repository\Doctrine\DoctrineRepository instance
     */
    protected function getSynapse_Zone_OrmRepositoryService()
    {
        return $this->services['synapse.zone.orm_repository'] = $this->get('doctrine')->getRepository('Synapse:Zone', 'synapse');
    }

    /*
     * Gets the 'synapse.zone_type.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Cmf\Framework\Theme\ZoneType\Loader\InMemory\InMemoryLoader A Synapse\Cmf\Framework\Theme\ZoneType\Loader\InMemory\InMemoryLoader instance
     */
    protected function getSynapse_ZoneType_LoaderService()
    {
        $this->services['synapse.zone_type.loader'] = $instance = new \Synapse\Cmf\Framework\Theme\ZoneType\Loader\InMemory\InMemoryLoader('Synapse\\Cmf\\Framework\\Theme\\ZoneType\\Entity\\ZoneTypeCollection', $this->get('majora.normalizer'), $this->get('synapse.component_type.loader'));

        $instance->registerZoneType(array('id' => 'bootstrap.page.top', 'name' => 'top', 'order' => 1, 'components' => array(0 => 'free', 1 => 'menu', 2 => 'page_menu')));
        $instance->registerZoneType(array('id' => 'bootstrap.page.jumbotron', 'name' => 'jumbotron', 'order' => 2, 'components' => array(0 => 'text', 1 => 'free', 2 => 'static')));
        $instance->registerZoneType(array('id' => 'bootstrap.page.content', 'name' => 'content', 'order' => 3, 'components' => array(0 => 'text', 1 => 'free', 2 => 'static', 3 => 'page_menu')));
        $instance->registerZoneType(array('id' => 'bootstrap.page.footer', 'name' => 'footer', 'order' => 4, 'components' => array(0 => 'free')));
        $instance->registerZoneType(array('id' => 'bootstrap.demo.jumbotron', 'name' => 'jumbotron', 'order' => 1, 'components' => array(0 => 'text', 1 => 'free')));
        $instance->registerZoneType(array('id' => 'bootstrap.demo.content', 'name' => 'content', 'order' => 2, 'components' => array(0 => 'text', 1 => 'free')));

        return $instance;
    }

    /*
     * Gets the 'synase.page.validator.unique_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Synapse\Page\Bundle\Validator\Constraints\UniquePagePathValidator A Synapse\Page\Bundle\Validator\Constraints\UniquePagePathValidator instance
     */
    protected function getSynase_Page_Validator_UniquePathService()
    {
        return $this->services['synase.page.validator.unique_path'] = new \Synapse\Page\Bundle\Validator\Constraints\UniquePagePathValidator($this->get('synapse.page.loader'));
    }

    /*
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator A Symfony\Component\Translation\IdentityTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(${($_ = isset($this->services['translator.selector']) ? $this->services['translator.selector'] : $this->getTranslator_SelectorService()) && false ?: '_'});
    }

    /*
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, ${($_ = isset($this->services['translator.selector']) ? $this->services['translator.selector'] : $this->getTranslator_SelectorService()) && false ?: '_'}, array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /*
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');

        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'SynapsePageBundle:Form:synapse_admin_form_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Synapse\Cmf\Framework\Engine\Bridge\Twig\Extension(${($_ = isset($this->services['synapse.zone.renderer']) ? $this->services['synapse.zone.renderer'] : $this->getSynapse_Zone_RendererService()) && false ?: '_'}));
        $instance->addExtension($this->get('synapse.admin.twig_extension'));
        $instance->addGlobal('app', $b);
        $instance->addRuntimeLoader(new \Symfony\Bundle\TwigBundle\ContainerAwareRuntimeLoader($this, array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => 'twig.runtime.httpkernel', 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => 'twig.form.renderer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }

    /*
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'SynapsePageBundle:Form:synapse_admin_form_layout.html.twig'), $this->get('twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, $this->get('templating.name_parser'), $this->targetDirs[4]);

        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[4].'/vendor/majora/framework-extra-bundle/src/Majora/Bundle/FrameworkExtraBundle/Resources/views'), 'MajoraFrameworkExtra');
        $instance->addPath(($this->targetDirs[4].'/src/Synapse/Cmf/Bundle/Resources/views'), 'SynapseCmf');
        $instance->addPath(($this->targetDirs[4].'/src/Synapse/Admin/Bundle/Resources/views'), 'SynapseAdmin');
        $instance->addPath(($this->targetDirs[4].'/src/Synapse/Page/Bundle/Resources/views'), 'SynapsePage');
        $instance->addPath(($this->targetDirs[4].'/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views'), 'SynapseDemoTheme');
        $instance->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /*
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->get('fragment.handler'));
    }

    /*
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'Synapse\\Page\\Bundle\\Validator\\Constraints\\UniquePagePathValidator' => 'synase.page.validator.unique_path')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->addYamlMappings(array(0 => ($this->targetDirs[4].'/src/Synapse/Cmf/Bundle/Resources/config/validation/Template.yml'), 1 => ($this->targetDirs[4].'/src/Synapse/Cmf/Bundle/Resources/config/validation/Zone.yml'), 2 => ($this->targetDirs[4].'/src/Synapse/Cmf/Bundle/Resources/config/validation/Component.yml')));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->setMetadataCache(new \Symfony\Component\Validator\Mapping\Cache\Psr6Cache(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'})));
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /*
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /*
     * Gets the '242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d47_2' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Engine\Decorator\Content\HtmlDecorator A Synapse\Cmf\Framework\Engine\Decorator\Content\HtmlDecorator instance
     */
    public function get242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d472Service($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d47_2'] = new SynapseCmfFrameworkEngineDecoratorContentHtmlDecorator_00000000124408dc000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->get242a1fe64f24e7248b5f270e52d5835e0b08d996f1971e79afef7fb2ba736d472Service(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Synapse\Cmf\Framework\Engine\Decorator\Content\HtmlDecorator(${($_ = isset($this->services['synapse.context.stack']) ? $this->services['synapse.context.stack'] : $this->getSynapse_Context_StackService()) && false ?: '_'}, new \Synapse\Cmf\Framework\Engine\Context\Content\RenderingContextBuilder(new \Synapse\Cmf\Framework\Engine\Resolver\TemplateResolver($this->get('synapse.template.orm_loader')), ${($_ = isset($this->services['synapse.content.resolver']) ? $this->services['synapse.content.resolver'] : $this->getSynapse_Content_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'}), $this->get('templating'));
    }

    /*
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /*
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('qk2UdQgJZv', 0, 'vEi8USaL0R31frFl21OJqi', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'cache.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Qqhn4qcCwe', 0, 'vEi8USaL0R31frFl21OJqi', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a)));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('67642ae91cb8a1.48652831')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /*
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the 'swiftmailer.mailer.default.transport.eventdispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Swift_Events_SimpleEventDispatcher A Swift_Events_SimpleEventDispatcher instance
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the 'synapse.component.context_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextBuilder A Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextBuilder instance
     */
    protected function getSynapse_Component_ContextBuilderService()
    {
        return $this->services['synapse.component.context_builder'] = new \Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextBuilder(${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.content.resolver']) ? $this->services['synapse.content.resolver'] : $this->getSynapse_Content_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.context.normalizer']) ? $this->services['synapse.context.normalizer'] : $this->getSynapse_Context_NormalizerService()) && false ?: '_'});
    }

    /*
     * Gets the 'synapse.component.decorator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Engine\Decorator\Component\HtmlDecorator A Synapse\Cmf\Framework\Engine\Decorator\Component\HtmlDecorator instance
     */
    public function getSynapse_Component_DecoratorService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.component.decorator'] = new SynapseCmfFrameworkEngineDecoratorComponentHtmlDecorator_0000000012440825000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Component_DecoratorService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Synapse\Cmf\Framework\Engine\Decorator\Component\HtmlDecorator(${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.component.context_builder']) ? $this->services['synapse.component.context_builder'] : $this->getSynapse_Component_ContextBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.context.stack']) ? $this->services['synapse.context.stack'] : $this->getSynapse_Context_StackService()) && false ?: '_'}, $this->get('templating'));
    }

    /*
     * Gets the 'synapse.content.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Synapse\Cmf\Framework\Theme\Content\Resolver\ContentResolver A Synapse\Cmf\Framework\Theme\Content\Resolver\ContentResolver instance
     */
    protected function getSynapse_Content_ResolverService()
    {
        return $this->services['synapse.content.resolver'] = new \Synapse\Cmf\Framework\Theme\Content\Resolver\ContentResolver($this->get('synapse.content_type.loader'));
    }

    /*
     * Gets the 'synapse.context.normalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextNormalizer A Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextNormalizer instance
     */
    public function getSynapse_Context_NormalizerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.context.normalizer'] = new SynapseCmfFrameworkEngineContextComponentRenderingContextNormalizer_000000001244082c000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Context_NormalizerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        return new \Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextNormalizer(${($_ = isset($this->services['synapse.content.resolver']) ? $this->services['synapse.content.resolver'] : $this->getSynapse_Content_ResolverService()) && false ?: '_'}, $this->get('synapse.theme.loader'), $this->get('synapse.template.orm_loader'), $this->get('synapse.zone.orm_loader'));
    }

    /*
     * Gets the 'synapse.context.stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Synapse\Cmf\Framework\Engine\Context\RenderingContextStack A Synapse\Cmf\Framework\Engine\Context\RenderingContextStack instance
     */
    protected function getSynapse_Context_StackService()
    {
        return $this->services['synapse.context.stack'] = new \Synapse\Cmf\Framework\Engine\Context\RenderingContextStack();
    }

    /*
     * Gets the 'synapse.variation.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Synapse\Cmf\Framework\Engine\Resolver\VariationResolver A Synapse\Cmf\Framework\Engine\Resolver\VariationResolver instance
     */
    protected function getSynapse_Variation_ResolverService()
    {
        $this->services['synapse.variation.resolver'] = $instance = new \Synapse\Cmf\Framework\Engine\Resolver\VariationResolver($this->get('property_accessor'), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage());

        $instance->registerVariationConfig('bootstrap', array('templates' => array('demo' => array('path' => 'SynapseDemoThemeBundle:Template:page.html.twig', 'default' => false, 'contents' => array(), 'variations' => array()), 'page' => array('path' => 'SynapseDemoThemeBundle:Template:page.html.twig', 'default' => false, 'contents' => array(), 'variations' => array())), 'zones' => array('top' => array('virtual' => true, 'aggregation' => array('type' => 'inline'), 'main' => false, 'variations' => array()), 'jumbotron' => array('main' => false, 'virtual' => false, 'aggregation' => array('type' => 'inline'), 'variations' => array()), 'content' => array('main' => true, 'virtual' => false, 'aggregation' => array('type' => 'inline'), 'variations' => array()), 'footer' => array('main' => false, 'virtual' => false, 'aggregation' => array('type' => 'inline'), 'variations' => array())), 'components' => array('text' => array('config' => array('html' => array('enabled' => true)), 'variations' => array('jumbotron' => array('_if' => 'zone == \'jumbotron\'', '_then' => array('config' => array('html' => array('enabled' => true))), '_last' => false))), 'static' => array('config' => array('templates' => array('default' => 'SynapseCmfBundle:Component:static.html.twig', 'logo' => 'SynapseDemoThemeBundle:Component:static-logo.html.twig')), 'variations' => array()), 'free' => array('path' => 'SynapseDemoThemeBundle:Component:free.html.twig', 'config' => array(), 'variations' => array('jumbotron' => array('_if' => 'zone == \'jumbotron\'', '_then' => array('path' => 'SynapseDemoThemeBundle:Component:free-jumbotron.html.twig', 'config' => array()), '_last' => false))))));

        return $instance;
    }

    /*
     * Gets the 'synapse.zone.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Synapse\Cmf\Framework\Engine\Renderer\Zone\ZoneRenderer A Synapse\Cmf\Framework\Engine\Renderer\Zone\ZoneRenderer instance
     */
    public function getSynapse_Zone_RendererService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['synapse.zone.renderer'] = new SynapseCmfFrameworkEngineRendererZoneZoneRenderer_0000000012440822000000001cda1a393bb20db927518a1a87f0b49fe1e3980c(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSynapse_Zone_RendererService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = ${($_ = isset($this->services['synapse.context.stack']) ? $this->services['synapse.context.stack'] : $this->getSynapse_Context_StackService()) && false ?: '_'};

        return new \Synapse\Cmf\Framework\Engine\Renderer\Zone\ZoneRenderer($a, new \Synapse\Cmf\Framework\Engine\Decorator\Component\FragmentDecorator(${($_ = isset($this->services['synapse.variation.resolver']) ? $this->services['synapse.variation.resolver'] : $this->getSynapse_Variation_ResolverService()) && false ?: '_'}, ${($_ = isset($this->services['synapse.component.context_builder']) ? $this->services['synapse.component.context_builder'] : $this->getSynapse_Component_ContextBuilderService()) && false ?: '_'}, $a, $this->get('fragment.handler')), array('inline' => new \Synapse\Cmf\Framework\Engine\Renderer\Zone\Aggregator\InlineAggregator(), 'template' => new \Synapse\Cmf\Framework\Engine\Renderer\Zone\Aggregator\TemplatingAggregator($this->get('templating'))));
    }

    /*
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /*
     * Gets the 'translator.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Translation\MessageSelector A Symfony\Component\Translation\MessageSelector instance
     */
    protected function getTranslator_SelectorService()
    {
        return $this->services['translator.selector'] = new \Symfony\Component\Translation\MessageSelector();
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'doctrine_migrations.dir_name' => false,
        'synapse.media_store.physical_path' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[2]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'MajoraFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/majora/framework-extra-bundle/src/Majora/Bundle/FrameworkExtraBundle'),
                    'namespace' => 'Majora\\Bundle\\FrameworkExtraBundle',
                ),
                'SynapseCmfBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Synapse/Cmf/Bundle'),
                    'namespace' => 'Synapse\\Cmf\\Bundle',
                ),
                'SynapseAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Synapse/Admin/Bundle'),
                    'namespace' => 'Synapse\\Admin\\Bundle',
                ),
                'SynapsePageBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Synapse/Page/Bundle'),
                    'namespace' => 'Synapse\\Page\\Bundle',
                ),
                'SynapseDemoThemeBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Synapse/Demo/Bundle/ThemeBundle'),
                    'namespace' => 'Synapse\\Demo\\Bundle\\ThemeBundle',
                ),
                'SynapseDemoAppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Synapse/Demo/Bundle/AppBundle'),
                    'namespace' => 'Synapse\\Demo\\Bundle\\AppBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/../../var/sessions/prod'); break;
            case 'router.resource': $value = ($this->targetDirs[2].'/config/routing.yml'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[2].'/DoctrineMigrations'); break;
            case 'synapse.media_store.physical_path': $value = ($this->targetDirs[2].'/../../web/assets/demo/'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'demo',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MajoraFrameworkExtraBundle' => 'Majora\\Bundle\\FrameworkExtraBundle\\MajoraFrameworkExtraBundle',
                'SynapseCmfBundle' => 'Synapse\\Cmf\\Bundle\\SynapseCmfBundle',
                'SynapseAdminBundle' => 'Synapse\\Admin\\Bundle\\SynapseAdminBundle',
                'SynapsePageBundle' => 'Synapse\\Page\\Bundle\\SynapsePageBundle',
                'SynapseDemoThemeBundle' => 'Synapse\\Demo\\Bundle\\ThemeBundle\\SynapseDemoThemeBundle',
                'SynapseDemoAppBundle' => 'Synapse\\Demo\\Bundle\\AppBundle\\SynapseDemoAppBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'demoProdProjectContainer',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'database_host' => 'db',
            'database_port' => 3306,
            'database_user' => 'symfony',
            'database_password' => 'symfony',
            'database_name' => 'symfony',
            'admin_host' => 'localhost',
            'front_host' => 'demo.synapse.dev',
            'locale' => 'fr',
            'locales' => array(
                0 => 'en',
                1 => 'fr',
            ),
            'locales_regex' => 'en|fr',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'demoProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'demoProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'demoProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'SynapsePageBundle:Form:synapse_admin_form_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'synapse' => 'doctrine.orm.synapse_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'synapse',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
                'synapse' => 'doctrine.dbal.synapse_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'fr',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'synapse.media_store.web_path' => 'assets/demo',
            'synapse.subrequest.zone_parameter' => '_synapse_zone',
            'synapse.subrequest.component_parameter' => '_synapse_component',
            'synapse.page.rendering_route' => 'synapse_content_type_page',
            'console.command.ids' => array(

            ),
        );
    }
}

class DoctrineORMEntityManager_0000000012440a83000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95313d504631811 = null;
    private $initializer67642ae953144159974581 = null;
    private static $publicProperties67642ae95311d621728418 = array(
        
    );
    public function getConnection()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getConnection', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getMetadataFactory', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getExpressionBuilder', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'beginTransaction', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getCache', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getCache();
    }
    public function transactional($func)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'transactional', array('func' => $func), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->transactional($func);
    }
    public function commit()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'commit', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->commit();
    }
    public function rollback()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'rollback', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getClassMetadata', array('className' => $className), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'createQuery', array('dql' => $dql), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'createNamedQuery', array('name' => $name), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'createQueryBuilder', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'flush', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'clear', array('entityName' => $entityName), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->clear($entityName);
    }
    public function close()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'close', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->close();
    }
    public function persist($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'persist', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'remove', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'refresh', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'detach', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'merge', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getRepository', array('entityName' => $entityName), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'contains', array('entity' => $entity), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getEventManager', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getConfiguration', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'isOpen', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getUnitOfWork', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getProxyFactory', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'initializeObject', array('obj' => $obj), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'getFilters', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'isFiltersStateClean', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'hasFilters', array(), $this->initializer67642ae953144159974581);
        return $this->valueHolder67642ae95313d504631811->hasFilters();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae953144159974581 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__get', array('name' => $name), $this->initializer67642ae953144159974581);
        if (isset(self::$publicProperties67642ae95311d621728418[$name])) {
            return $this->valueHolder67642ae95313d504631811->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95313d504631811;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95313d504631811;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae953144159974581);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95313d504631811;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95313d504631811;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__isset', array('name' => $name), $this->initializer67642ae953144159974581);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95313d504631811;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95313d504631811;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__unset', array('name' => $name), $this->initializer67642ae953144159974581);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95313d504631811;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95313d504631811;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__clone', array(), $this->initializer67642ae953144159974581);
        $this->valueHolder67642ae95313d504631811 = clone $this->valueHolder67642ae95313d504631811;
    }
    public function __sleep()
    {
        $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, '__sleep', array(), $this->initializer67642ae953144159974581);
        return array('valueHolder67642ae95313d504631811');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae953144159974581 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae953144159974581;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae953144159974581 && $this->initializer67642ae953144159974581->__invoke($this->valueHolder67642ae95313d504631811, $this, 'initializeProxy', array(), $this->initializer67642ae953144159974581);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95313d504631811;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95313d504631811;
    }
}

class SynapseCmfBundleLoaderOrmFileOrmLoader_0000000012440a8d000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\FileOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae956ff7877197316 = null;
    private $initializer67642ae956ffc801257119 = null;
    private static $publicProperties67642ae956fe4555488862 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'getLoadingDelegates', array(), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->getLoadingDelegates();
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'retrieve', array('id' => $id), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'getLoadingDelegate', array(), $this->initializer67642ae956ffc801257119);
        return $this->valueHolder67642ae956ff7877197316->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae956ffc801257119 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__get', array('name' => $name), $this->initializer67642ae956ffc801257119);
        if (isset(self::$publicProperties67642ae956fe4555488862[$name])) {
            return $this->valueHolder67642ae956ff7877197316->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae956ff7877197316;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae956ff7877197316;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae956ffc801257119);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae956ff7877197316;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae956ff7877197316;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__isset', array('name' => $name), $this->initializer67642ae956ffc801257119);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae956ff7877197316;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae956ff7877197316;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__unset', array('name' => $name), $this->initializer67642ae956ffc801257119);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae956ff7877197316;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae956ff7877197316;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__clone', array(), $this->initializer67642ae956ffc801257119);
        $this->valueHolder67642ae956ff7877197316 = clone $this->valueHolder67642ae956ff7877197316;
    }
    public function __sleep()
    {
        $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, '__sleep', array(), $this->initializer67642ae956ffc801257119);
        return array('valueHolder67642ae956ff7877197316');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae956ffc801257119 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae956ffc801257119;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae956ffc801257119 && $this->initializer67642ae956ffc801257119->__invoke($this->valueHolder67642ae956ff7877197316, $this, 'initializeProxy', array(), $this->initializer67642ae956ffc801257119);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae956ff7877197316;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae956ff7877197316;
    }
}

class SynapseCmfBundleLoaderOrmFormattedImageOrmLoader_0000000012440a8a000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\FormattedImageOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae957e67972456077 = null;
    private $initializer67642ae957e70943975480 = null;
    private static $publicProperties67642ae957e3e191687187 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'getLoadingDelegates', array(), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->getLoadingDelegates();
    }
    public function retrieveByFile(\Synapse\Cmf\Framework\Media\File\Model\FileInterface $file)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'retrieveByFile', array('file' => $file), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->retrieveByFile($file);
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'retrieve', array('id' => $id), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'getLoadingDelegate', array(), $this->initializer67642ae957e70943975480);
        return $this->valueHolder67642ae957e67972456077->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae957e70943975480 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__get', array('name' => $name), $this->initializer67642ae957e70943975480);
        if (isset(self::$publicProperties67642ae957e3e191687187[$name])) {
            return $this->valueHolder67642ae957e67972456077->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae957e67972456077;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae957e67972456077;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae957e70943975480);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae957e67972456077;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae957e67972456077;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__isset', array('name' => $name), $this->initializer67642ae957e70943975480);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae957e67972456077;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae957e67972456077;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__unset', array('name' => $name), $this->initializer67642ae957e70943975480);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae957e67972456077;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae957e67972456077;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__clone', array(), $this->initializer67642ae957e70943975480);
        $this->valueHolder67642ae957e67972456077 = clone $this->valueHolder67642ae957e67972456077;
    }
    public function __sleep()
    {
        $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, '__sleep', array(), $this->initializer67642ae957e70943975480);
        return array('valueHolder67642ae957e67972456077');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae957e70943975480 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae957e70943975480;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae957e70943975480 && $this->initializer67642ae957e70943975480->__invoke($this->valueHolder67642ae957e67972456077, $this, 'initializeProxy', array(), $this->initializer67642ae957e70943975480);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae957e67972456077;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae957e67972456077;
    }
}

class SynapseCmfBundleLoaderOrmImageOrmLoader_0000000012440a95000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\ImageOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae9590b9002380037 = null;
    private $initializer67642ae9590c0452210502 = null;
    private static $publicProperties67642ae95909d886231666 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'getLoadingDelegates', array(), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->getLoadingDelegates();
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'retrieve', array('id' => $id), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'getLoadingDelegate', array(), $this->initializer67642ae9590c0452210502);
        return $this->valueHolder67642ae9590b9002380037->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae9590c0452210502 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__get', array('name' => $name), $this->initializer67642ae9590c0452210502);
        if (isset(self::$publicProperties67642ae95909d886231666[$name])) {
            return $this->valueHolder67642ae9590b9002380037->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9590b9002380037;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae9590b9002380037;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae9590c0452210502);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9590b9002380037;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae9590b9002380037;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__isset', array('name' => $name), $this->initializer67642ae9590c0452210502);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9590b9002380037;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae9590b9002380037;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__unset', array('name' => $name), $this->initializer67642ae9590c0452210502);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9590b9002380037;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae9590b9002380037;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__clone', array(), $this->initializer67642ae9590c0452210502);
        $this->valueHolder67642ae9590b9002380037 = clone $this->valueHolder67642ae9590b9002380037;
    }
    public function __sleep()
    {
        $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, '__sleep', array(), $this->initializer67642ae9590c0452210502);
        return array('valueHolder67642ae9590b9002380037');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae9590c0452210502 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae9590c0452210502;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae9590c0452210502 && $this->initializer67642ae9590c0452210502->__invoke($this->valueHolder67642ae9590b9002380037, $this, 'initializeProxy', array(), $this->initializer67642ae9590c0452210502);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae9590b9002380037;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae9590b9002380037;
    }
}

class SynapseCmfBundleLoaderOrmZoneOrmLoader_0000000012440a9e000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\ZoneOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95a04b262656558 = null;
    private $initializer67642ae95a053450287338 = null;
    private static $publicProperties67642ae95a033674082080 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'getLoadingDelegates', array(), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->getLoadingDelegates();
    }
    public function retrieveForTemplate(\Synapse\Cmf\Bundle\Entity\Orm\Template $template)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'retrieveForTemplate', array('template' => $template), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->retrieveForTemplate($template);
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'retrieve', array('id' => $id), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'getLoadingDelegate', array(), $this->initializer67642ae95a053450287338);
        return $this->valueHolder67642ae95a04b262656558->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95a053450287338 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__get', array('name' => $name), $this->initializer67642ae95a053450287338);
        if (isset(self::$publicProperties67642ae95a033674082080[$name])) {
            return $this->valueHolder67642ae95a04b262656558->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95a04b262656558;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95a04b262656558;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95a053450287338);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95a04b262656558;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95a04b262656558;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__isset', array('name' => $name), $this->initializer67642ae95a053450287338);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95a04b262656558;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95a04b262656558;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__unset', array('name' => $name), $this->initializer67642ae95a053450287338);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95a04b262656558;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95a04b262656558;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__clone', array(), $this->initializer67642ae95a053450287338);
        $this->valueHolder67642ae95a04b262656558 = clone $this->valueHolder67642ae95a04b262656558;
    }
    public function __sleep()
    {
        $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, '__sleep', array(), $this->initializer67642ae95a053450287338);
        return array('valueHolder67642ae95a04b262656558');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95a053450287338 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95a053450287338;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95a053450287338 && $this->initializer67642ae95a053450287338->__invoke($this->valueHolder67642ae95a04b262656558, $this, 'initializeProxy', array(), $this->initializer67642ae95a053450287338);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95a04b262656558;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95a04b262656558;
    }
}

class SynapseCmfBundleLoaderOrmTemplateOrmLoader_0000000012440a99000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\TemplateOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95b183665211904 = null;
    private $initializer67642ae95b18a205358662 = null;
    private static $publicProperties67642ae95b169449375169 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'getLoadingDelegates', array(), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->getLoadingDelegates();
    }
    public function __invoke(\Synapse\Cmf\Bundle\Entity\Orm\Template $template)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__invoke', array('template' => $template), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->__invoke($template);
    }
    public function retrieveDisplayable(\Synapse\Cmf\Framework\Theme\TemplateType\Entity\TemplateType $templateType, \Synapse\Cmf\Framework\Theme\Content\Entity\Content $content)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieveDisplayable', array('templateType' => $templateType, 'content' => $content), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieveDisplayable($templateType, $content);
    }
    public function retrieveLocal(\Synapse\Cmf\Framework\Theme\TemplateType\Entity\TemplateType $templateType, \Synapse\Cmf\Framework\Theme\Content\Entity\Content $content)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieveLocal', array('templateType' => $templateType, 'content' => $content), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieveLocal($templateType, $content);
    }
    public function retrieveGlobal(\Synapse\Cmf\Framework\Theme\TemplateType\Entity\TemplateType $templateType, \Synapse\Cmf\Framework\Theme\ContentType\Model\ContentTypeInterface $contentType)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieveGlobal', array('templateType' => $templateType, 'contentType' => $contentType), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieveGlobal($templateType, $contentType);
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'retrieve', array('id' => $id), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'getLoadingDelegate', array(), $this->initializer67642ae95b18a205358662);
        return $this->valueHolder67642ae95b183665211904->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95b18a205358662 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__get', array('name' => $name), $this->initializer67642ae95b18a205358662);
        if (isset(self::$publicProperties67642ae95b169449375169[$name])) {
            return $this->valueHolder67642ae95b183665211904->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95b183665211904;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95b183665211904;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95b18a205358662);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95b183665211904;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95b183665211904;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__isset', array('name' => $name), $this->initializer67642ae95b18a205358662);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95b183665211904;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95b183665211904;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__unset', array('name' => $name), $this->initializer67642ae95b18a205358662);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95b183665211904;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95b183665211904;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__clone', array(), $this->initializer67642ae95b18a205358662);
        $this->valueHolder67642ae95b183665211904 = clone $this->valueHolder67642ae95b183665211904;
    }
    public function __sleep()
    {
        $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, '__sleep', array(), $this->initializer67642ae95b18a205358662);
        return array('valueHolder67642ae95b183665211904');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95b18a205358662 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95b18a205358662;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95b18a205358662 && $this->initializer67642ae95b18a205358662->__invoke($this->valueHolder67642ae95b183665211904, $this, 'initializeProxy', array(), $this->initializer67642ae95b18a205358662);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95b183665211904;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95b183665211904;
    }
}

class SynapseCmfFrameworkEngineDecoratorContentHtmlDecorator_00000000124408dc000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Engine\Decorator\Content\HtmlDecorator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95c8cb599349831 = null;
    private $initializer67642ae95c8d0880149280 = null;
    private static $publicProperties67642ae95c8b7258347909 = array(
        
    );
    public function prepare(\Synapse\Cmf\Framework\Theme\Content\Model\ContentInterface $content, \Synapse\Cmf\Framework\Theme\Theme\Model\ThemeInterface $theme, $templateTypeName = null)
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, 'prepare', array('content' => $content, 'theme' => $theme, 'templateTypeName' => $templateTypeName), $this->initializer67642ae95c8d0880149280);
        return $this->valueHolder67642ae95c8cb599349831->prepare($content, $theme, $templateTypeName);
    }
    public function render(array $templateParameters = array())
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, 'render', array('templateParameters' => $templateParameters), $this->initializer67642ae95c8d0880149280);
        return $this->valueHolder67642ae95c8cb599349831->render($templateParameters);
    }
    public function decorate(array $templateParameters = array())
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, 'decorate', array('templateParameters' => $templateParameters), $this->initializer67642ae95c8d0880149280);
        return $this->valueHolder67642ae95c8cb599349831->decorate($templateParameters);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95c8d0880149280 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__get', array('name' => $name), $this->initializer67642ae95c8d0880149280);
        if (isset(self::$publicProperties67642ae95c8b7258347909[$name])) {
            return $this->valueHolder67642ae95c8cb599349831->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95c8cb599349831;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95c8cb599349831;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95c8d0880149280);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95c8cb599349831;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95c8cb599349831;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__isset', array('name' => $name), $this->initializer67642ae95c8d0880149280);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95c8cb599349831;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95c8cb599349831;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__unset', array('name' => $name), $this->initializer67642ae95c8d0880149280);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95c8cb599349831;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95c8cb599349831;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__clone', array(), $this->initializer67642ae95c8d0880149280);
        $this->valueHolder67642ae95c8cb599349831 = clone $this->valueHolder67642ae95c8cb599349831;
    }
    public function __sleep()
    {
        $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, '__sleep', array(), $this->initializer67642ae95c8d0880149280);
        return array('valueHolder67642ae95c8cb599349831');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95c8d0880149280 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95c8d0880149280;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95c8d0880149280 && $this->initializer67642ae95c8d0880149280->__invoke($this->valueHolder67642ae95c8cb599349831, $this, 'initializeProxy', array(), $this->initializer67642ae95c8d0880149280);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95c8cb599349831;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95c8cb599349831;
    }
}

class SynapseCmfFrameworkEngineEngine_00000000124408d4000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Engine\Engine implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95d0e3407941346 = null;
    private $initializer67642ae95d0ea779657945 = null;
    private static $publicProperties67642ae95d0cc489876096 = array(
        
    );
    public function enableTheme($themeName)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, 'enableTheme', array('themeName' => $themeName), $this->initializer67642ae95d0ea779657945);
        return $this->valueHolder67642ae95d0e3407941346->enableTheme($themeName);
    }
    public function enableDefaultTheme()
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, 'enableDefaultTheme', array(), $this->initializer67642ae95d0ea779657945);
        return $this->valueHolder67642ae95d0e3407941346->enableDefaultTheme();
    }
    public function getCurrentTheme()
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, 'getCurrentTheme', array(), $this->initializer67642ae95d0ea779657945);
        return $this->valueHolder67642ae95d0e3407941346->getCurrentTheme();
    }
    public function createDecorator($decorable, $templateTypeName = null)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, 'createDecorator', array('decorable' => $decorable, 'templateTypeName' => $templateTypeName), $this->initializer67642ae95d0ea779657945);
        return $this->valueHolder67642ae95d0e3407941346->createDecorator($decorable, $templateTypeName);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95d0ea779657945 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__get', array('name' => $name), $this->initializer67642ae95d0ea779657945);
        if (isset(self::$publicProperties67642ae95d0cc489876096[$name])) {
            return $this->valueHolder67642ae95d0e3407941346->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95d0e3407941346;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95d0e3407941346;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95d0ea779657945);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95d0e3407941346;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95d0e3407941346;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__isset', array('name' => $name), $this->initializer67642ae95d0ea779657945);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95d0e3407941346;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95d0e3407941346;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__unset', array('name' => $name), $this->initializer67642ae95d0ea779657945);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95d0e3407941346;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95d0e3407941346;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__clone', array(), $this->initializer67642ae95d0ea779657945);
        $this->valueHolder67642ae95d0e3407941346 = clone $this->valueHolder67642ae95d0e3407941346;
    }
    public function __sleep()
    {
        $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, '__sleep', array(), $this->initializer67642ae95d0ea779657945);
        return array('valueHolder67642ae95d0e3407941346');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95d0ea779657945 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95d0ea779657945;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95d0ea779657945 && $this->initializer67642ae95d0ea779657945->__invoke($this->valueHolder67642ae95d0e3407941346, $this, 'initializeProxy', array(), $this->initializer67642ae95d0ea779657945);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95d0e3407941346;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95d0e3407941346;
    }
}

class SynapseCmfFrameworkEngineDecoratorComponentHtmlDecorator_0000000012440825000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Engine\Decorator\Component\HtmlDecorator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95dae1506098341 = null;
    private $initializer67642ae95dae9926175633 = null;
    private static $publicProperties67642ae95dac9886035681 = array(
        
    );
    public function render(array $templateParameters = array())
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, 'render', array('templateParameters' => $templateParameters), $this->initializer67642ae95dae9926175633);
        return $this->valueHolder67642ae95dae1506098341->render($templateParameters);
    }
    public function decorate(array $templateParameters = array())
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, 'decorate', array('templateParameters' => $templateParameters), $this->initializer67642ae95dae9926175633);
        return $this->valueHolder67642ae95dae1506098341->decorate($templateParameters);
    }
    public function prepare($content, \Synapse\Cmf\Framework\Theme\Theme\Model\ThemeInterface $theme, \Synapse\Cmf\Framework\Theme\Template\Model\TemplateInterface $template, \Synapse\Cmf\Framework\Theme\Zone\Model\ZoneInterface $zone, \Synapse\Cmf\Framework\Theme\Component\Model\ComponentInterface $component)
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, 'prepare', array('content' => $content, 'theme' => $theme, 'template' => $template, 'zone' => $zone, 'component' => $component), $this->initializer67642ae95dae9926175633);
        return $this->valueHolder67642ae95dae1506098341->prepare($content, $theme, $template, $zone, $component);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95dae9926175633 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__get', array('name' => $name), $this->initializer67642ae95dae9926175633);
        if (isset(self::$publicProperties67642ae95dac9886035681[$name])) {
            return $this->valueHolder67642ae95dae1506098341->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95dae1506098341;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95dae1506098341;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95dae9926175633);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95dae1506098341;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95dae1506098341;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__isset', array('name' => $name), $this->initializer67642ae95dae9926175633);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95dae1506098341;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95dae1506098341;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__unset', array('name' => $name), $this->initializer67642ae95dae9926175633);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95dae1506098341;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95dae1506098341;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__clone', array(), $this->initializer67642ae95dae9926175633);
        $this->valueHolder67642ae95dae1506098341 = clone $this->valueHolder67642ae95dae1506098341;
    }
    public function __sleep()
    {
        $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, '__sleep', array(), $this->initializer67642ae95dae9926175633);
        return array('valueHolder67642ae95dae1506098341');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95dae9926175633 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95dae9926175633;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95dae9926175633 && $this->initializer67642ae95dae9926175633->__invoke($this->valueHolder67642ae95dae1506098341, $this, 'initializeProxy', array(), $this->initializer67642ae95dae9926175633);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95dae1506098341;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95dae1506098341;
    }
}

class SynapseCmfFrameworkEngineRendererZoneZoneRenderer_0000000012440822000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Engine\Renderer\Zone\ZoneRenderer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95e582687247033 = null;
    private $initializer67642ae95e58a337743819 = null;
    private static $publicProperties67642ae95e566947261112 = array(
        
    );
    public function render($zoneName, array $parameters = array())
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, 'render', array('zoneName' => $zoneName, 'parameters' => $parameters), $this->initializer67642ae95e58a337743819);
        return $this->valueHolder67642ae95e582687247033->render($zoneName, $parameters);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95e58a337743819 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__get', array('name' => $name), $this->initializer67642ae95e58a337743819);
        if (isset(self::$publicProperties67642ae95e566947261112[$name])) {
            return $this->valueHolder67642ae95e582687247033->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95e582687247033;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95e582687247033;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95e58a337743819);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95e582687247033;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95e582687247033;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__isset', array('name' => $name), $this->initializer67642ae95e58a337743819);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95e582687247033;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95e582687247033;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__unset', array('name' => $name), $this->initializer67642ae95e58a337743819);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95e582687247033;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95e582687247033;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__clone', array(), $this->initializer67642ae95e58a337743819);
        $this->valueHolder67642ae95e582687247033 = clone $this->valueHolder67642ae95e582687247033;
    }
    public function __sleep()
    {
        $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, '__sleep', array(), $this->initializer67642ae95e58a337743819);
        return array('valueHolder67642ae95e582687247033');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95e58a337743819 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95e58a337743819;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95e58a337743819 && $this->initializer67642ae95e58a337743819->__invoke($this->valueHolder67642ae95e582687247033, $this, 'initializeProxy', array(), $this->initializer67642ae95e58a337743819);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95e582687247033;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95e582687247033;
    }
}

class SynapseCmfFrameworkEngineContextComponentRenderingContextNormalizer_000000001244082c000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Engine\Context\Component\RenderingContextNormalizer implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae95eee9564688021 = null;
    private $initializer67642ae95eef0592343170 = null;
    private static $publicProperties67642ae95eed2580193049 = array(
        
    );
    public function normalize(\Synapse\Cmf\Framework\Theme\Content\Entity\Content $content, \Synapse\Cmf\Framework\Theme\Theme\Model\ThemeInterface $theme, \Synapse\Cmf\Framework\Theme\Template\Model\TemplateInterface $template, \Synapse\Cmf\Framework\Theme\Zone\Model\ZoneInterface $zone, \Synapse\Cmf\Framework\Theme\Component\Model\ComponentInterface $component)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, 'normalize', array('content' => $content, 'theme' => $theme, 'template' => $template, 'zone' => $zone, 'component' => $component), $this->initializer67642ae95eef0592343170);
        return $this->valueHolder67642ae95eee9564688021->normalize($content, $theme, $template, $zone, $component);
    }
    public function denormalize(array $contextData)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, 'denormalize', array('contextData' => $contextData), $this->initializer67642ae95eef0592343170);
        return $this->valueHolder67642ae95eee9564688021->denormalize($contextData);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae95eef0592343170 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__get', array('name' => $name), $this->initializer67642ae95eef0592343170);
        if (isset(self::$publicProperties67642ae95eed2580193049[$name])) {
            return $this->valueHolder67642ae95eee9564688021->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95eee9564688021;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95eee9564688021;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae95eef0592343170);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95eee9564688021;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae95eee9564688021;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__isset', array('name' => $name), $this->initializer67642ae95eef0592343170);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95eee9564688021;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95eee9564688021;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__unset', array('name' => $name), $this->initializer67642ae95eef0592343170);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae95eee9564688021;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae95eee9564688021;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__clone', array(), $this->initializer67642ae95eef0592343170);
        $this->valueHolder67642ae95eee9564688021 = clone $this->valueHolder67642ae95eee9564688021;
    }
    public function __sleep()
    {
        $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, '__sleep', array(), $this->initializer67642ae95eef0592343170);
        return array('valueHolder67642ae95eee9564688021');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae95eef0592343170 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae95eef0592343170;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae95eef0592343170 && $this->initializer67642ae95eef0592343170->__invoke($this->valueHolder67642ae95eee9564688021, $this, 'initializeProxy', array(), $this->initializer67642ae95eef0592343170);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae95eee9564688021;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae95eee9564688021;
    }
}

class SynapseCmfFrameworkMediaFormatLoaderInMemoryInMemoryLoader_0000000012440a89000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Media\Format\Loader\InMemory\InMemoryLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae9612b7844235582 = null;
    private $initializer67642ae9612bf303227993 = null;
    private static $publicProperties67642ae96129c219466773 = array(
        
    );
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae9612bf303227993);
        return $this->valueHolder67642ae9612b7844235582->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae9612bf303227993);
        return $this->valueHolder67642ae9612b7844235582->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'retrieve', array('id' => $id), $this->initializer67642ae9612bf303227993);
        return $this->valueHolder67642ae9612b7844235582->retrieve($id);
    }
    public function registerData(array $entityData)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'registerData', array('entityData' => $entityData), $this->initializer67642ae9612bf303227993);
        return $this->valueHolder67642ae9612b7844235582->registerData($entityData);
    }
    public function registerEntity(\Majora\Framework\Model\CollectionableInterface $entity)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'registerEntity', array('entity' => $entity), $this->initializer67642ae9612bf303227993);
        return $this->valueHolder67642ae9612b7844235582->registerEntity($entity);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae9612bf303227993 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__get', array('name' => $name), $this->initializer67642ae9612bf303227993);
        if (isset(self::$publicProperties67642ae96129c219466773[$name])) {
            return $this->valueHolder67642ae9612b7844235582->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9612b7844235582;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae9612b7844235582;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae9612bf303227993);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9612b7844235582;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae9612b7844235582;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__isset', array('name' => $name), $this->initializer67642ae9612bf303227993);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9612b7844235582;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae9612b7844235582;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__unset', array('name' => $name), $this->initializer67642ae9612bf303227993);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae9612b7844235582;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae9612b7844235582;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__clone', array(), $this->initializer67642ae9612bf303227993);
        $this->valueHolder67642ae9612b7844235582 = clone $this->valueHolder67642ae9612b7844235582;
    }
    public function __sleep()
    {
        $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, '__sleep', array(), $this->initializer67642ae9612bf303227993);
        return array('valueHolder67642ae9612b7844235582');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae9612bf303227993 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae9612bf303227993;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae9612bf303227993 && $this->initializer67642ae9612bf303227993->__invoke($this->valueHolder67642ae9612b7844235582, $this, 'initializeProxy', array(), $this->initializer67642ae9612bf303227993);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae9612b7844235582;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae9612b7844235582;
    }
}

class SynapseCmfBundleLoaderOrmComponentOrmLoader_0000000012440a93000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Bundle\Loader\Orm\ComponentOrmLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae962147645644065 = null;
    private $initializer67642ae96214f562417823 = null;
    private static $publicProperties67642ae96212b106063380 = array(
        
    );
    public function getLoadingDelegates()
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'getLoadingDelegates', array(), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->getLoadingDelegates();
    }
    public function setEntityRepository(\Doctrine\ORM\EntityRepository $entityRepository)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'setEntityRepository', array('entityRepository' => $entityRepository), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->setEntityRepository($entityRepository);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'retrieve', array('id' => $id), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->retrieve($id);
    }
    public function setUp($entityClass, array $entityProperties, $collectionClass, \Majora\Framework\Repository\RepositoryInterface $entityRepository = null)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'setUp', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass, 'entityRepository' => $entityRepository), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->setUp($entityClass, $entityProperties, $collectionClass, $entityRepository);
    }
    public function configureMetadata($entityClass, array $entityProperties, $collectionClass)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'configureMetadata', array('entityClass' => $entityClass, 'entityProperties' => $entityProperties, 'collectionClass' => $collectionClass), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->configureMetadata($entityClass, $entityProperties, $collectionClass);
    }
    public function getLoadingDelegate()
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'getLoadingDelegate', array(), $this->initializer67642ae96214f562417823);
        return $this->valueHolder67642ae962147645644065->getLoadingDelegate();
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae96214f562417823 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__get', array('name' => $name), $this->initializer67642ae96214f562417823);
        if (isset(self::$publicProperties67642ae96212b106063380[$name])) {
            return $this->valueHolder67642ae962147645644065->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae962147645644065;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae962147645644065;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae96214f562417823);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae962147645644065;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae962147645644065;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__isset', array('name' => $name), $this->initializer67642ae96214f562417823);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae962147645644065;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae962147645644065;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__unset', array('name' => $name), $this->initializer67642ae96214f562417823);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae962147645644065;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae962147645644065;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__clone', array(), $this->initializer67642ae96214f562417823);
        $this->valueHolder67642ae962147645644065 = clone $this->valueHolder67642ae962147645644065;
    }
    public function __sleep()
    {
        $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, '__sleep', array(), $this->initializer67642ae96214f562417823);
        return array('valueHolder67642ae962147645644065');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae96214f562417823 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae96214f562417823;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae96214f562417823 && $this->initializer67642ae96214f562417823->__invoke($this->valueHolder67642ae962147645644065, $this, 'initializeProxy', array(), $this->initializer67642ae96214f562417823);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae962147645644065;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae962147645644065;
    }
}

class SynapseCmfFrameworkThemeTemplateTypeLoaderInMemoryInMemoryLoader_0000000012440a98000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Theme\TemplateType\Loader\InMemory\InMemoryLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae963110518149907 = null;
    private $initializer67642ae963118230506511 = null;
    private static $publicProperties67642ae9630f2026749057 = array(
        
    );
    public function registerTemplateType(array $templateTypeData)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'registerTemplateType', array('templateTypeData' => $templateTypeData), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->registerTemplateType($templateTypeData);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'retrieve', array('id' => $id), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->retrieve($id);
    }
    public function registerData(array $entityData)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'registerData', array('entityData' => $entityData), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->registerData($entityData);
    }
    public function registerEntity(\Majora\Framework\Model\CollectionableInterface $entity)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'registerEntity', array('entity' => $entity), $this->initializer67642ae963118230506511);
        return $this->valueHolder67642ae963110518149907->registerEntity($entity);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae963118230506511 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__get', array('name' => $name), $this->initializer67642ae963118230506511);
        if (isset(self::$publicProperties67642ae9630f2026749057[$name])) {
            return $this->valueHolder67642ae963110518149907->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae963110518149907;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae963110518149907;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae963118230506511);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae963110518149907;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae963110518149907;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__isset', array('name' => $name), $this->initializer67642ae963118230506511);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae963110518149907;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae963110518149907;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__unset', array('name' => $name), $this->initializer67642ae963118230506511);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae963110518149907;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae963110518149907;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__clone', array(), $this->initializer67642ae963118230506511);
        $this->valueHolder67642ae963110518149907 = clone $this->valueHolder67642ae963110518149907;
    }
    public function __sleep()
    {
        $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, '__sleep', array(), $this->initializer67642ae963118230506511);
        return array('valueHolder67642ae963110518149907');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae963118230506511 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae963118230506511;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae963118230506511 && $this->initializer67642ae963118230506511->__invoke($this->valueHolder67642ae963110518149907, $this, 'initializeProxy', array(), $this->initializer67642ae963118230506511);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae963110518149907;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae963110518149907;
    }
}

class SynapseCmfFrameworkThemeThemeLoaderInMemoryInMemoryLoader_0000000012440ae4000000001cda1a393bb20db927518a1a87f0b49fe1e3980c extends \Synapse\Cmf\Framework\Theme\Theme\Loader\InMemory\InMemoryLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder67642ae964749324229548 = null;
    private $initializer67642ae964751208047402 = null;
    private static $publicProperties67642ae964722152837896 = array(
        
    );
    public function registerTheme(array $themeData)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'registerTheme', array('themeData' => $themeData), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->registerTheme($themeData);
    }
    public function retrieveByName($name)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'retrieveByName', array('name' => $name), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->retrieveByName($name);
    }
    public function retrieveAll(array $filters = array(), $limit = null, $offset = null)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'retrieveAll', array('filters' => $filters, 'limit' => $limit, 'offset' => $offset), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->retrieveAll($filters, $limit, $offset);
    }
    public function retrieveOne(array $filters = array())
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'retrieveOne', array('filters' => $filters), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->retrieveOne($filters);
    }
    public function retrieve($id)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'retrieve', array('id' => $id), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->retrieve($id);
    }
    public function registerData(array $entityData)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'registerData', array('entityData' => $entityData), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->registerData($entityData);
    }
    public function registerEntity(\Majora\Framework\Model\CollectionableInterface $entity)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'registerEntity', array('entity' => $entity), $this->initializer67642ae964751208047402);
        return $this->valueHolder67642ae964749324229548->registerEntity($entity);
    }
    public function __construct($initializer)
    {
        $this->initializer67642ae964751208047402 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__get', array('name' => $name), $this->initializer67642ae964751208047402);
        if (isset(self::$publicProperties67642ae964722152837896[$name])) {
            return $this->valueHolder67642ae964749324229548->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae964749324229548;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder67642ae964749324229548;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer67642ae964751208047402);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae964749324229548;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder67642ae964749324229548;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__isset', array('name' => $name), $this->initializer67642ae964751208047402);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae964749324229548;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae964749324229548;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__unset', array('name' => $name), $this->initializer67642ae964751208047402);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67642ae964749324229548;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder67642ae964749324229548;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__clone', array(), $this->initializer67642ae964751208047402);
        $this->valueHolder67642ae964749324229548 = clone $this->valueHolder67642ae964749324229548;
    }
    public function __sleep()
    {
        $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, '__sleep', array(), $this->initializer67642ae964751208047402);
        return array('valueHolder67642ae964749324229548');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer67642ae964751208047402 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer67642ae964751208047402;
    }
    public function initializeProxy()
    {
        return $this->initializer67642ae964751208047402 && $this->initializer67642ae964751208047402->__invoke($this->valueHolder67642ae964749324229548, $this, 'initializeProxy', array(), $this->initializer67642ae964751208047402);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder67642ae964749324229548;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67642ae964749324229548;
    }
}
