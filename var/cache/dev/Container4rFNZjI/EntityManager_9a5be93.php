<?php

namespace Container4rFNZjI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder07faa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7ec21 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesed97c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getConnection', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getMetadataFactory', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getExpressionBuilder', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'beginTransaction', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getCache', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'transactional', array('func' => $func), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'commit', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->commit();
    }

    public function rollback()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'rollback', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getClassMetadata', array('className' => $className), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'createQuery', array('dql' => $dql), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'createNamedQuery', array('name' => $name), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'createQueryBuilder', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'flush', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'clear', array('entityName' => $entityName), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->clear($entityName);
    }

    public function close()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'close', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->close();
    }

    public function persist($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'persist', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'remove', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'refresh', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'detach', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'merge', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'contains', array('entity' => $entity), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getEventManager', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getConfiguration', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'isOpen', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getUnitOfWork', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getProxyFactory', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'initializeObject', array('obj' => $obj), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'getFilters', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'isFiltersStateClean', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'hasFilters', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return $this->valueHolder07faa->hasFilters();
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

        $instance->initializer7ec21 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder07faa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder07faa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder07faa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__get', ['name' => $name], $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        if (isset(self::$publicPropertiesed97c[$name])) {
            return $this->valueHolder07faa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07faa;

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

        $targetObject = $this->valueHolder07faa;
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
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07faa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder07faa;
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
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__isset', array('name' => $name), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07faa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder07faa;
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
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__unset', array('name' => $name), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder07faa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder07faa;
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
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__clone', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        $this->valueHolder07faa = clone $this->valueHolder07faa;
    }

    public function __sleep()
    {
        $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, '__sleep', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;

        return array('valueHolder07faa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7ec21 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7ec21;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7ec21 && ($this->initializer7ec21->__invoke($valueHolder07faa, $this, 'initializeProxy', array(), $this->initializer7ec21) || 1) && $this->valueHolder07faa = $valueHolder07faa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder07faa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder07faa;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
