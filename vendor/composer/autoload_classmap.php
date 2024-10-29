<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'GeminiAPI\\ChatSession' => $vendorDir . '/gemini-api-php/client/src/ChatSession.php',
    'GeminiAPI\\Client' => $vendorDir . '/gemini-api-php/client/src/Client.php',
    'GeminiAPI\\ClientInterface' => $vendorDir . '/gemini-api-php/client/src/ClientInterface.php',
    'GeminiAPI\\EmbeddingModel' => $vendorDir . '/gemini-api-php/client/src/EmbeddingModel.php',
    'GeminiAPI\\Enums\\BlockReason' => $vendorDir . '/gemini-api-php/client/src/Enums/BlockReason.php',
    'GeminiAPI\\Enums\\FinishReason' => $vendorDir . '/gemini-api-php/client/src/Enums/FinishReason.php',
    'GeminiAPI\\Enums\\HarmBlockThreshold' => $vendorDir . '/gemini-api-php/client/src/Enums/HarmBlockThreshold.php',
    'GeminiAPI\\Enums\\HarmCategory' => $vendorDir . '/gemini-api-php/client/src/Enums/HarmCategory.php',
    'GeminiAPI\\Enums\\HarmProbability' => $vendorDir . '/gemini-api-php/client/src/Enums/HarmProbability.php',
    'GeminiAPI\\Enums\\MimeType' => $vendorDir . '/gemini-api-php/client/src/Enums/MimeType.php',
    'GeminiAPI\\Enums\\ModelName' => $vendorDir . '/gemini-api-php/client/src/Enums/ModelName.php',
    'GeminiAPI\\Enums\\Role' => $vendorDir . '/gemini-api-php/client/src/Enums/Role.php',
    'GeminiAPI\\Enums\\TaskType' => $vendorDir . '/gemini-api-php/client/src/Enums/TaskType.php',
    'GeminiAPI\\GenerationConfig' => $vendorDir . '/gemini-api-php/client/src/GenerationConfig.php',
    'GeminiAPI\\GenerativeModel' => $vendorDir . '/gemini-api-php/client/src/GenerativeModel.php',
    'GeminiAPI\\Json\\ObjectListParser' => $vendorDir . '/gemini-api-php/client/src/Json/ObjectListParser.php',
    'GeminiAPI\\Requests\\CountTokensRequest' => $vendorDir . '/gemini-api-php/client/src/Requests/CountTokensRequest.php',
    'GeminiAPI\\Requests\\EmbedContentRequest' => $vendorDir . '/gemini-api-php/client/src/Requests/EmbedContentRequest.php',
    'GeminiAPI\\Requests\\GenerateContentRequest' => $vendorDir . '/gemini-api-php/client/src/Requests/GenerateContentRequest.php',
    'GeminiAPI\\Requests\\GenerateContentStreamRequest' => $vendorDir . '/gemini-api-php/client/src/Requests/GenerateContentStreamRequest.php',
    'GeminiAPI\\Requests\\ListModelsRequest' => $vendorDir . '/gemini-api-php/client/src/Requests/ListModelsRequest.php',
    'GeminiAPI\\Requests\\RequestInterface' => $vendorDir . '/gemini-api-php/client/src/Requests/RequestInterface.php',
    'GeminiAPI\\Resources\\Candidate' => $vendorDir . '/gemini-api-php/client/src/Resources/Candidate.php',
    'GeminiAPI\\Resources\\CitationMetadata' => $vendorDir . '/gemini-api-php/client/src/Resources/CitationMetadata.php',
    'GeminiAPI\\Resources\\CitationSource' => $vendorDir . '/gemini-api-php/client/src/Resources/CitationSource.php',
    'GeminiAPI\\Resources\\Content' => $vendorDir . '/gemini-api-php/client/src/Resources/Content.php',
    'GeminiAPI\\Resources\\ContentEmbedding' => $vendorDir . '/gemini-api-php/client/src/Resources/ContentEmbedding.php',
    'GeminiAPI\\Resources\\Model' => $vendorDir . '/gemini-api-php/client/src/Resources/Model.php',
    'GeminiAPI\\Resources\\Parts\\ImagePart' => $vendorDir . '/gemini-api-php/client/src/Resources/Parts/ImagePart.php',
    'GeminiAPI\\Resources\\Parts\\PartInterface' => $vendorDir . '/gemini-api-php/client/src/Resources/Parts/PartInterface.php',
    'GeminiAPI\\Resources\\Parts\\TextPart' => $vendorDir . '/gemini-api-php/client/src/Resources/Parts/TextPart.php',
    'GeminiAPI\\Resources\\PromptFeedback' => $vendorDir . '/gemini-api-php/client/src/Resources/PromptFeedback.php',
    'GeminiAPI\\Resources\\SafetyRating' => $vendorDir . '/gemini-api-php/client/src/Resources/SafetyRating.php',
    'GeminiAPI\\Responses\\CountTokensResponse' => $vendorDir . '/gemini-api-php/client/src/Responses/CountTokensResponse.php',
    'GeminiAPI\\Responses\\EmbedContentResponse' => $vendorDir . '/gemini-api-php/client/src/Responses/EmbedContentResponse.php',
    'GeminiAPI\\Responses\\GenerateContentResponse' => $vendorDir . '/gemini-api-php/client/src/Responses/GenerateContentResponse.php',
    'GeminiAPI\\Responses\\ListModelsResponse' => $vendorDir . '/gemini-api-php/client/src/Responses/ListModelsResponse.php',
    'GeminiAPI\\SafetySetting' => $vendorDir . '/gemini-api-php/client/src/SafetySetting.php',
    'GeminiAPI\\Traits\\ArrayTypeValidator' => $vendorDir . '/gemini-api-php/client/src/Traits/ArrayTypeValidator.php',
    'Http\\Discovery\\ClassDiscovery' => $vendorDir . '/php-http/discovery/src/ClassDiscovery.php',
    'Http\\Discovery\\Exception' => $vendorDir . '/php-http/discovery/src/Exception.php',
    'Http\\Discovery\\Exception\\ClassInstantiationFailedException' => $vendorDir . '/php-http/discovery/src/Exception/ClassInstantiationFailedException.php',
    'Http\\Discovery\\Exception\\DiscoveryFailedException' => $vendorDir . '/php-http/discovery/src/Exception/DiscoveryFailedException.php',
    'Http\\Discovery\\Exception\\NoCandidateFoundException' => $vendorDir . '/php-http/discovery/src/Exception/NoCandidateFoundException.php',
    'Http\\Discovery\\Exception\\NotFoundException' => $vendorDir . '/php-http/discovery/src/Exception/NotFoundException.php',
    'Http\\Discovery\\Exception\\PuliUnavailableException' => $vendorDir . '/php-http/discovery/src/Exception/PuliUnavailableException.php',
    'Http\\Discovery\\Exception\\StrategyUnavailableException' => $vendorDir . '/php-http/discovery/src/Exception/StrategyUnavailableException.php',
    'Http\\Discovery\\HttpAsyncClientDiscovery' => $vendorDir . '/php-http/discovery/src/HttpAsyncClientDiscovery.php',
    'Http\\Discovery\\HttpClientDiscovery' => $vendorDir . '/php-http/discovery/src/HttpClientDiscovery.php',
    'Http\\Discovery\\MessageFactoryDiscovery' => $vendorDir . '/php-http/discovery/src/MessageFactoryDiscovery.php',
    'Http\\Discovery\\NotFoundException' => $vendorDir . '/php-http/discovery/src/NotFoundException.php',
    'Http\\Discovery\\Psr17Factory' => $vendorDir . '/php-http/discovery/src/Psr17Factory.php',
    'Http\\Discovery\\Psr17FactoryDiscovery' => $vendorDir . '/php-http/discovery/src/Psr17FactoryDiscovery.php',
    'Http\\Discovery\\Psr18Client' => $vendorDir . '/php-http/discovery/src/Psr18Client.php',
    'Http\\Discovery\\Psr18ClientDiscovery' => $vendorDir . '/php-http/discovery/src/Psr18ClientDiscovery.php',
    'Http\\Discovery\\Strategy\\CommonClassesStrategy' => $vendorDir . '/php-http/discovery/src/Strategy/CommonClassesStrategy.php',
    'Http\\Discovery\\Strategy\\CommonPsr17ClassesStrategy' => $vendorDir . '/php-http/discovery/src/Strategy/CommonPsr17ClassesStrategy.php',
    'Http\\Discovery\\Strategy\\DiscoveryStrategy' => $vendorDir . '/php-http/discovery/src/Strategy/DiscoveryStrategy.php',
    'Http\\Discovery\\Strategy\\MockClientStrategy' => $vendorDir . '/php-http/discovery/src/Strategy/MockClientStrategy.php',
    'Http\\Discovery\\Strategy\\PuliBetaStrategy' => $vendorDir . '/php-http/discovery/src/Strategy/PuliBetaStrategy.php',
    'Http\\Discovery\\StreamFactoryDiscovery' => $vendorDir . '/php-http/discovery/src/StreamFactoryDiscovery.php',
    'Http\\Discovery\\UriFactoryDiscovery' => $vendorDir . '/php-http/discovery/src/UriFactoryDiscovery.php',
    'Nyholm\\Psr7\\Factory\\HttplugFactory' => $vendorDir . '/nyholm/psr7/src/Factory/HttplugFactory.php',
    'Nyholm\\Psr7\\Factory\\Psr17Factory' => $vendorDir . '/nyholm/psr7/src/Factory/Psr17Factory.php',
    'Nyholm\\Psr7\\MessageTrait' => $vendorDir . '/nyholm/psr7/src/MessageTrait.php',
    'Nyholm\\Psr7\\Request' => $vendorDir . '/nyholm/psr7/src/Request.php',
    'Nyholm\\Psr7\\RequestTrait' => $vendorDir . '/nyholm/psr7/src/RequestTrait.php',
    'Nyholm\\Psr7\\Response' => $vendorDir . '/nyholm/psr7/src/Response.php',
    'Nyholm\\Psr7\\ServerRequest' => $vendorDir . '/nyholm/psr7/src/ServerRequest.php',
    'Nyholm\\Psr7\\Stream' => $vendorDir . '/nyholm/psr7/src/Stream.php',
    'Nyholm\\Psr7\\StreamTrait' => $vendorDir . '/nyholm/psr7/src/StreamTrait.php',
    'Nyholm\\Psr7\\UploadedFile' => $vendorDir . '/nyholm/psr7/src/UploadedFile.php',
    'Nyholm\\Psr7\\Uri' => $vendorDir . '/nyholm/psr7/src/Uri.php',
    'Orhanerday\\OpenAi\\OpenAi' => $vendorDir . '/orhanerday/open-ai/src/OpenAi.php',
    'Orhanerday\\OpenAi\\Url' => $vendorDir . '/orhanerday/open-ai/src/Url.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Http\\Client\\ClientExceptionInterface' => $vendorDir . '/psr/http-client/src/ClientExceptionInterface.php',
    'Psr\\Http\\Client\\ClientInterface' => $vendorDir . '/psr/http-client/src/ClientInterface.php',
    'Psr\\Http\\Client\\NetworkExceptionInterface' => $vendorDir . '/psr/http-client/src/NetworkExceptionInterface.php',
    'Psr\\Http\\Client\\RequestExceptionInterface' => $vendorDir . '/psr/http-client/src/RequestExceptionInterface.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestFactoryInterface' => $vendorDir . '/psr/http-factory/src/RequestFactoryInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseFactoryInterface' => $vendorDir . '/psr/http-factory/src/ResponseFactoryInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestFactoryInterface' => $vendorDir . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamFactoryInterface' => $vendorDir . '/psr/http-factory/src/StreamFactoryInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileFactoryInterface' => $vendorDir . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriFactoryInterface' => $vendorDir . '/psr/http-factory/src/UriFactoryInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/src/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/src/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/src/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/src/NullLogger.php',
    'Symfony\\Component\\HttpClient\\AmpHttpClient' => $vendorDir . '/symfony/http-client/AmpHttpClient.php',
    'Symfony\\Component\\HttpClient\\AsyncDecoratorTrait' => $vendorDir . '/symfony/http-client/AsyncDecoratorTrait.php',
    'Symfony\\Component\\HttpClient\\CachingHttpClient' => $vendorDir . '/symfony/http-client/CachingHttpClient.php',
    'Symfony\\Component\\HttpClient\\Chunk\\DataChunk' => $vendorDir . '/symfony/http-client/Chunk/DataChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\ErrorChunk' => $vendorDir . '/symfony/http-client/Chunk/ErrorChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\FirstChunk' => $vendorDir . '/symfony/http-client/Chunk/FirstChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\InformationalChunk' => $vendorDir . '/symfony/http-client/Chunk/InformationalChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\LastChunk' => $vendorDir . '/symfony/http-client/Chunk/LastChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\ServerSentEvent' => $vendorDir . '/symfony/http-client/Chunk/ServerSentEvent.php',
    'Symfony\\Component\\HttpClient\\CurlHttpClient' => $vendorDir . '/symfony/http-client/CurlHttpClient.php',
    'Symfony\\Component\\HttpClient\\DataCollector\\HttpClientDataCollector' => $vendorDir . '/symfony/http-client/DataCollector/HttpClientDataCollector.php',
    'Symfony\\Component\\HttpClient\\DecoratorTrait' => $vendorDir . '/symfony/http-client/DecoratorTrait.php',
    'Symfony\\Component\\HttpClient\\DependencyInjection\\HttpClientPass' => $vendorDir . '/symfony/http-client/DependencyInjection/HttpClientPass.php',
    'Symfony\\Component\\HttpClient\\EventSourceHttpClient' => $vendorDir . '/symfony/http-client/EventSourceHttpClient.php',
    'Symfony\\Component\\HttpClient\\Exception\\ClientException' => $vendorDir . '/symfony/http-client/Exception/ClientException.php',
    'Symfony\\Component\\HttpClient\\Exception\\EventSourceException' => $vendorDir . '/symfony/http-client/Exception/EventSourceException.php',
    'Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait' => $vendorDir . '/symfony/http-client/Exception/HttpExceptionTrait.php',
    'Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/http-client/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\HttpClient\\Exception\\JsonException' => $vendorDir . '/symfony/http-client/Exception/JsonException.php',
    'Symfony\\Component\\HttpClient\\Exception\\RedirectionException' => $vendorDir . '/symfony/http-client/Exception/RedirectionException.php',
    'Symfony\\Component\\HttpClient\\Exception\\ServerException' => $vendorDir . '/symfony/http-client/Exception/ServerException.php',
    'Symfony\\Component\\HttpClient\\Exception\\TimeoutException' => $vendorDir . '/symfony/http-client/Exception/TimeoutException.php',
    'Symfony\\Component\\HttpClient\\Exception\\TransportException' => $vendorDir . '/symfony/http-client/Exception/TransportException.php',
    'Symfony\\Component\\HttpClient\\HttpClient' => $vendorDir . '/symfony/http-client/HttpClient.php',
    'Symfony\\Component\\HttpClient\\HttpClientTrait' => $vendorDir . '/symfony/http-client/HttpClientTrait.php',
    'Symfony\\Component\\HttpClient\\HttpOptions' => $vendorDir . '/symfony/http-client/HttpOptions.php',
    'Symfony\\Component\\HttpClient\\HttplugClient' => $vendorDir . '/symfony/http-client/HttplugClient.php',
    'Symfony\\Component\\HttpClient\\Internal\\AmpBody' => $vendorDir . '/symfony/http-client/Internal/AmpBody.php',
    'Symfony\\Component\\HttpClient\\Internal\\AmpClientState' => $vendorDir . '/symfony/http-client/Internal/AmpClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\AmpListener' => $vendorDir . '/symfony/http-client/Internal/AmpListener.php',
    'Symfony\\Component\\HttpClient\\Internal\\AmpResolver' => $vendorDir . '/symfony/http-client/Internal/AmpResolver.php',
    'Symfony\\Component\\HttpClient\\Internal\\Canary' => $vendorDir . '/symfony/http-client/Internal/Canary.php',
    'Symfony\\Component\\HttpClient\\Internal\\ClientState' => $vendorDir . '/symfony/http-client/Internal/ClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\CurlClientState' => $vendorDir . '/symfony/http-client/Internal/CurlClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\DnsCache' => $vendorDir . '/symfony/http-client/Internal/DnsCache.php',
    'Symfony\\Component\\HttpClient\\Internal\\HttplugWaitLoop' => $vendorDir . '/symfony/http-client/Internal/HttplugWaitLoop.php',
    'Symfony\\Component\\HttpClient\\Internal\\LegacyHttplugInterface' => $vendorDir . '/symfony/http-client/Internal/LegacyHttplugInterface.php',
    'Symfony\\Component\\HttpClient\\Internal\\NativeClientState' => $vendorDir . '/symfony/http-client/Internal/NativeClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\PushedResponse' => $vendorDir . '/symfony/http-client/Internal/PushedResponse.php',
    'Symfony\\Component\\HttpClient\\Messenger\\PingWebhookMessage' => $vendorDir . '/symfony/http-client/Messenger/PingWebhookMessage.php',
    'Symfony\\Component\\HttpClient\\Messenger\\PingWebhookMessageHandler' => $vendorDir . '/symfony/http-client/Messenger/PingWebhookMessageHandler.php',
    'Symfony\\Component\\HttpClient\\MockHttpClient' => $vendorDir . '/symfony/http-client/MockHttpClient.php',
    'Symfony\\Component\\HttpClient\\NativeHttpClient' => $vendorDir . '/symfony/http-client/NativeHttpClient.php',
    'Symfony\\Component\\HttpClient\\NoPrivateNetworkHttpClient' => $vendorDir . '/symfony/http-client/NoPrivateNetworkHttpClient.php',
    'Symfony\\Component\\HttpClient\\Psr18Client' => $vendorDir . '/symfony/http-client/Psr18Client.php',
    'Symfony\\Component\\HttpClient\\Response\\AmpResponse' => $vendorDir . '/symfony/http-client/Response/AmpResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\AsyncContext' => $vendorDir . '/symfony/http-client/Response/AsyncContext.php',
    'Symfony\\Component\\HttpClient\\Response\\AsyncResponse' => $vendorDir . '/symfony/http-client/Response/AsyncResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\CommonResponseTrait' => $vendorDir . '/symfony/http-client/Response/CommonResponseTrait.php',
    'Symfony\\Component\\HttpClient\\Response\\CurlResponse' => $vendorDir . '/symfony/http-client/Response/CurlResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\HttplugPromise' => $vendorDir . '/symfony/http-client/Response/HttplugPromise.php',
    'Symfony\\Component\\HttpClient\\Response\\JsonMockResponse' => $vendorDir . '/symfony/http-client/Response/JsonMockResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\MockResponse' => $vendorDir . '/symfony/http-client/Response/MockResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\NativeResponse' => $vendorDir . '/symfony/http-client/Response/NativeResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\ResponseStream' => $vendorDir . '/symfony/http-client/Response/ResponseStream.php',
    'Symfony\\Component\\HttpClient\\Response\\StreamWrapper' => $vendorDir . '/symfony/http-client/Response/StreamWrapper.php',
    'Symfony\\Component\\HttpClient\\Response\\StreamableInterface' => $vendorDir . '/symfony/http-client/Response/StreamableInterface.php',
    'Symfony\\Component\\HttpClient\\Response\\TraceableResponse' => $vendorDir . '/symfony/http-client/Response/TraceableResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\TransportResponseTrait' => $vendorDir . '/symfony/http-client/Response/TransportResponseTrait.php',
    'Symfony\\Component\\HttpClient\\Retry\\GenericRetryStrategy' => $vendorDir . '/symfony/http-client/Retry/GenericRetryStrategy.php',
    'Symfony\\Component\\HttpClient\\Retry\\RetryStrategyInterface' => $vendorDir . '/symfony/http-client/Retry/RetryStrategyInterface.php',
    'Symfony\\Component\\HttpClient\\RetryableHttpClient' => $vendorDir . '/symfony/http-client/RetryableHttpClient.php',
    'Symfony\\Component\\HttpClient\\ScopingHttpClient' => $vendorDir . '/symfony/http-client/ScopingHttpClient.php',
    'Symfony\\Component\\HttpClient\\Test\\HarFileResponseFactory' => $vendorDir . '/symfony/http-client/Test/HarFileResponseFactory.php',
    'Symfony\\Component\\HttpClient\\TraceableHttpClient' => $vendorDir . '/symfony/http-client/TraceableHttpClient.php',
    'Symfony\\Component\\HttpClient\\UriTemplateHttpClient' => $vendorDir . '/symfony/http-client/UriTemplateHttpClient.php',
    'Symfony\\Contracts\\HttpClient\\ChunkInterface' => $vendorDir . '/symfony/http-client-contracts/ChunkInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ClientExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/DecodingExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\HttpExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/HttpExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/RedirectionExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ServerExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\TimeoutExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/TimeoutExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/TransportExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => $vendorDir . '/symfony/http-client-contracts/HttpClientInterface.php',
    'Symfony\\Contracts\\HttpClient\\ResponseInterface' => $vendorDir . '/symfony/http-client-contracts/ResponseInterface.php',
    'Symfony\\Contracts\\HttpClient\\ResponseStreamInterface' => $vendorDir . '/symfony/http-client-contracts/ResponseStreamInterface.php',
    'Symfony\\Contracts\\Service\\Attribute\\Required' => $vendorDir . '/symfony/service-contracts/Attribute/Required.php',
    'Symfony\\Contracts\\Service\\Attribute\\SubscribedService' => $vendorDir . '/symfony/service-contracts/Attribute/SubscribedService.php',
    'Symfony\\Contracts\\Service\\ResetInterface' => $vendorDir . '/symfony/service-contracts/ResetInterface.php',
    'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => $vendorDir . '/symfony/service-contracts/ServiceLocatorTrait.php',
    'Symfony\\Contracts\\Service\\ServiceProviderInterface' => $vendorDir . '/symfony/service-contracts/ServiceProviderInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberTrait.php',
);
