@extends('layouts.mainframe')

@section('mainContent')
    <h1> WeCare</h1>
    <p> lorem ipsum Abstract -- Industries keep a check on all statistics of their business and process this data using various data mining techniques to measure profit trends, revenue, growing markets and interesting opportunities to invest. Unfortunately, as the data grows it becomes a tedious task to process such a large data set and extract meaningful information. Database are increasing in tremendous speed, volume (terabyte to petabyte), and types (variety of Data) becoming more complex. To conquer this problem, Migration of Data from MySQL to NoSQL and bigdata processing performs through a programming concept identified as Hadoop MapReduce.
        This is a summary of three IEEE papers that propose to execute tasks assigned to a single Data Node in parallel instead of executing them sequentially, provides methodology for Migration of data from relation to NoSQL (MongoDB) database for bigdata analytics using Hadoop and also suggests a Big Data representation for grade analytics in an educational context.

        1. Introduction:
        Big data consists of a heterogeneous mixture of datastructured and unstructured data. Big data refers to datasets whose size is beyond the ability of typical database software tools to capture, store, manage, process and analyze. An issue with big data is that it uses NoSQL and has no Data Description Language. For analysis of big data, database integration and cleaning is much harder than the traditional mining approaches. In this summary, the issue of speed has been addressed by distributing the computation over several nodes each of which works in parallel on a subset of the complete dataset and maintains coherence for producing appropriate result. We propose to use a bunch of streaming multi-processors (SMs) for each single Data Node. An SM can have various processors and memory and all SMs run in parallel and independently. This summary proposes a Methodology for Migrating Relational Database to NoSQL Data base and Big Data Analytics on Migrated data using C4.5 Hadoop Map Reduce Algorithm. This summary explores the application of Hadoop based on the cloud system to analyze Grade Trends in a dataset. The setup can be implemented on any popular cloud service provider.

        2. Methodology:
        Parallel execution of single Data Node:
        Core Hadoop
        1) Hadoop Distributed File System (HDFS)
        An HDFS instance may consist of a large number of server machines, each storing a part of the file system data. Detection of faults and quick automatic recovery from them is a core architectural objective of HDFS. Applications that run on HDFS need streaming access to their datasets.
        2) MapReduce
        It comprises mainly of Mappers and Reducers. Mappers do the job of extracting the required raw information from the whole dataset. In our case it extracts date of sale, name of the product, selling price and cost price of various products. It is then sorted according to the key value of Mappers and passed to Reducers. Reducers do actual processing on this reduced data provided by Mappers and accomplish the final task yielding desired output.
        Hence, by implementing all this we have successfully found month wise profit trends of various products and this concept of using distributed data processing over a Hadoop cluster Abstract -- Industries keep a check on all statistics of their business and process this data using various data mining techniques to measure profit trends, revenue, growing markets and interesting opportunities to invest. Unfortunately, as the data grows it becomes a tedious task to process such a large data set and extract meaningful information. Database are increasing in tremendous speed, volume (terabyte to petabyte), and types (variety of Data) becoming more complex. To conquer this problem, Migration of Data from MySQL to NoSQL and bigdata processing performs through a programming concept identified as Hadoop MapReduce.
        This is a summary of three IEEE papers that propose to execute tasks assigned to a single Data Node in parallel instead of executing them sequentially, provides methodology for Migration of data from relation to NoSQL (MongoDB) database for bigdata analytics using Hadoop and also suggests a Big Data representation for grade analytics in an educational context.

        1. Introduction:
        Big data consists of a heterogeneous mixture of datastructured and unstructured data. Big data refers to datasets whose size is beyond the ability of typical database software tools to capture, store, manage, process and analyze. An issue with big data is that it uses NoSQL and has no Data Description Language. For analysis of big data, database integration and cleaning is much harder than the traditional mining approaches. In this summary, the issue of speed has been addressed by distributing the computation over several nodes each of which works in parallel on a subset of the complete dataset and maintains coherence for producing appropriate result. We propose to use a bunch of streaming multi-processors (SMs) for each single Data Node. An SM can have various processors and memory and all SMs run in parallel and independently. This summary proposes a Methodology for Migrating Relational Database to NoSQL Data base and Big Data Analytics on Migrated data using C4.5 Hadoop Map Reduce Algorithm. This summary explores the application of Hadoop based on the cloud system to analyze Grade Trends in a dataset. The setup can be implemented on any popular cloud service provider.

        2. Methodology:
        Parallel execution of single Data Node:
        Core Hadoop
        1) Hadoop Distributed File System (HDFS)
        An HDFS instance may consist of a large number of server machines, each storing a part of the file system data. Detection of faults and quick automatic recovery from them is a core architectural objective of HDFS. Applications that run on HDFS need streaming access to their datasets.
        2) MapReduce
        It comprises mainly of Mappers and Reducers. Mappers do the job of extracting the required raw information from the whole dataset. In our case it extracts date of sale, name of the product, selling price and cost price of various products. It is then sorted according to the key value of Mappers and passed to Reducers. Reducers do actual processing on this reduced data provided by Mappers and accomplish the final task yielding desired output.
        Hence, by implementing all this we have successfully found month wise profit trends of various products and this concept of using distributed data processing over a Hadoop cluster </p>
@endsection