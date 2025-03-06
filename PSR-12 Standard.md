# PSR-12 Standard
The intent of the PSR-12 specification is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code. This PSR seeks to provide a set way that coding style tools can implement, projects can declare adherence to and developers can easily relate to between different projects. When various authors collaborate across multiple projects, it helps to have one set of guidelines to be used among all those projects. Thus, the benefit of this guide is not in the rules themselves but the sharing of those rules.

## 2 General
### 2.3 Side Effects
A file should declare new symbols ( classes, methods, properities ) and cause not other side effects or it should execute logic with side effects, but **SHOULD NOT DO BOTH**.

Side effects means executing logic not directly related to declaring classes, functions, constants, etc.,  merely from including the file. 

"Side effects" include but are not limited to:
- generating output
- explicit use of **require** or **include** 
- connecting to external services, modifying ini settings, emitting errors or exception

### 2.4 Naming
**Pascal Case**: Class names
**camel Case**: Methods, variables, properties

### 2.5 Organizing a PHP file
The header of a php file may consist of a number of different blocks. If present, the blocks **must** be seperated by a single blank line, and **must not** contain a blank line.
**Each** block must be listed in the order that is found below, although blocks that are not relevant may be omitted.
> - Opening <?php tag
> - File-level docblock
> - One or more declare statements
> - The namespace declaration of the file
> - One or more class-based use import statements
> - One or more function-based use import statements
> - One or more constant-based use import statements
> - The remainder of the code in the file

### 2.6 Extends and Implements
Should be declared on the same line as the class name.


