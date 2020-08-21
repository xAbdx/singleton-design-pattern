# singleton-design-pattern 
The Implementations of Singleton Design Pattern

1. Eagerly Initialized Singleton: 
This is the simplest approach wherein the instance of the class is created at the time of class loading. The disadvantage of this approach is that the instance is created irrespective of whether it is accessed or not.

2. Eagerly Initialized Static Block Singleton: 
create the one-off instance of the class in a static block. This works because the static block is executed only once at the time of class loading.
The advantage with static block initialization is that you can write your initialization logic or handle exceptions in the static block.

3. Lazily Initialized Singleton: 
checking whether the instance is already created or not in the getInstance() method. If the instance is already created, we simply return it, otherwise, we first create the instance and then return it.

4. Double-Checked Locking Singleton: 
The synchronized keyword added to the getInstance() method prevents race conditions, but it also incurs some performance penalty. Let’s say that two threads T1 and T2 enter the getInstance() method simultaneously. The instance==null check will evaluate to true, so both of them will enter the synchronized block one-by-one. If the double check was not there, both threads would create a new instance.

5. Lazily Initialized Inner Class Singleton (Bill Pugh singleton): 
In this approach, a static inner class is used to lazily create a singleton instance. the inner class is not loaded until the getInstance() method is invoked for the first time. This solution is thread-safe and doesn’t require any synchronization. It is the most efficient approach among all the singleton design pattern implementations.

6. Enum Singleton: 
The disadvantage of this approach is that it is a bit inflexible compared to other approaches.

///////////////////////////////////////////////////////////////

The problem is: 
I have a website page that is not anybody have the access to enter it, 
except the admin (an admin web page for delete and update users),
so I have to use a singleton method in order to make that thing happen.
