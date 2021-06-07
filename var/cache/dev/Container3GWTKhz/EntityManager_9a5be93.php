<?php

namespace Container3GWTKhz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a43e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8b2ec = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties90b16 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getConnection', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getMetadataFactory', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getExpressionBuilder', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'beginTransaction', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getCache', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'transactional', array('func' => $func), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->transactional($func);
    }

    public function commit()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'commit', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->commit();
    }

    public function rollback()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'rollback', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'createQuery', array('dql' => $dql), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'createQueryBuilder', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'flush', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'clear', array('entityName' => $entityName), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->clear($entityName);
    }

    public function close()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'close', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->close();
    }

    public function persist($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'persist', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'remove', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'refresh', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'detach', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'merge', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'contains', array('entity' => $entity), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getEventManager', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getConfiguration', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'isOpen', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getUnitOfWork', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getProxyFactory', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'getFilters', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'isFiltersStateClean', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'hasFilters', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return $this->valueHolder1a43e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer8b2ec = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1a43e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a43e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a43e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__get', ['name' => $name], $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        if (isset(self::$publicProperties90b16[$name])) {
            return $this->valueHolder1a43e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a43e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a43e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a43e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a43e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__isset', array('name' => $name), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a43e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a43e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__unset', array('name' => $name), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a43e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a43e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__clone', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        $this->valueHolder1a43e = clone $this->valueHolder1a43e;
    }

    public function __sleep()
    {
        $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, '__sleep', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;

        return array('valueHolder1a43e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8b2ec = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8b2ec;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8b2ec && ($this->initializer8b2ec->__invoke($valueHolder1a43e, $this, 'initializeProxy', array(), $this->initializer8b2ec) || 1) && $this->valueHolder1a43e = $valueHolder1a43e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a43e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a43e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
