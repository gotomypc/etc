<?php

error_reporting(E_ALL);

/**
 * untitledModel - PomGenerator\class.RootPomGenerator.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 27.05.2011, 18:13:52 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package PomGenerator
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include PomGenerator_PomGenerator
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('PomGenerator/class.PomGenerator.php');

/* user defined includes */
// section -64--88-1-67-3804dd1e:1302b37cea3:-8000:0000000000000AA0-includes begin
// section -64--88-1-67-3804dd1e:1302b37cea3:-8000:0000000000000AA0-includes end

/* user defined constants */
// section -64--88-1-67-3804dd1e:1302b37cea3:-8000:0000000000000AA0-constants begin
// section -64--88-1-67-3804dd1e:1302b37cea3:-8000:0000000000000AA0-constants end

/**
 * Short description of class PomGenerator_RootPomGenerator
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package PomGenerator
 */
class PomGenerator_RootPomGenerator
    extends PomGenerator_PomGenerator
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---
	
    /**
     * Short description of method printBody
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function printBody()
    {
        echo '<modules>
		<?php echo "$modulesList"; ?>
	</modules>

	<licenses>
		<license>
			<name>Eclipse Public License v1.0</name>
			<comments>
       All rights reserved.

       This program and the accompanying materials are made
       available under the terms of the Eclipse Public License v1.0
       which accompanies this distribution, and is available at
       http://www.eclipse.org/legal/epl-v10.htm
      </comments>
		</license>
	</licenses>

	<properties>
		<egit-version>1.1.0-SNAPSHOT</egit-version>
		<tycho-version>0.12.0</tycho-version>
		<mockito-version>1.8.4</mockito-version>
		<junit-version>4.8.1</junit-version>
		<jetty-site>http://download.eclipse.org/jetty/7.1.6.v20100715/repository/</jetty-site>
		<wikitext-site>http://download.eclipse.org/tools/mylyn/update/weekly</wikitext-site>
		<orbit-site>http://download.eclipse.org/tools/orbit/downloads/drops/S20110124210048/repository</orbit-site>
	</properties>

	<profiles>
		<profile>
			<id>platform-galileo</id>
			<activation>
				<activeByDefault>true</activeByDefault>
				<property>
					<name>platform-version-name</name>
					<value>galileo</value>
				</property>
			</activation>
			<properties>
				<eclipse-site>http://download.eclipse.org/releases/galileo</eclipse-site>
				<platform-version>[3.5,3.6)</platform-version>
				<swtbot-site>http://download.eclipse.org/technology/swtbot/galileo/dev-build/update-site</swtbot-site>
			</properties>
		</profile>
		<profile>
			<id>platform-helios</id>
			<activation>
				<property>
					<name>platform-version-name</name>
					<value>helios</value>
				</property>
			</activation>
			<properties>
				<eclipse-site>http://download.eclipse.org/releases/helios</eclipse-site>
				<platform-version>[3.6,3.7)</platform-version>
				<swtbot-site>http://download.eclipse.org/technology/swtbot/helios/dev-build/update-site</swtbot-site>
			</properties>
		</profile>
		<profile>
			<id>platform-indigo</id>
			<activation>
				<property>
					<name>platform-version-name</name>
					<value>indigo</value>
				</property>
			</activation>
			<properties>
				<eclipse-site>http://download.eclipse.org/releases/indigo</eclipse-site>
				<platform-version>[3.7,3.8)</platform-version>
				<swtbot-site>http://download.eclipse.org/technology/swtbot/helios/dev-build/update-site</swtbot-site>
			</properties>
		</profile>
	</profiles>


	<repositories>
		<repository>
			<id>eclipse-platform</id>
			<layout>p2</layout>
			<url>${eclipse-site}</url>
		</repository>
		<repository>
			<id>swtbot</id>
			<layout>p2</layout>
			<url>${swtbot-site}</url>
		</repository>
		<repository>
			<id>wikitext</id>
			<layout>p2</layout>
			<url>${wikitext-site}</url>
		</repository>
		<repository>
			<id>jetty</id>
			<layout>p2</layout>
			<url>${jetty-site}</url>
		</repository>
		<repository>
			<id>orbit</id>
			<layout>p2</layout>
			<url>${orbit-site}</url>
		</repository>
	</repositories>

	<pluginRepositories>
		<pluginRepository>
			<!-- need maven-findbugs-2.3.2-SNAPSHOT, see http://jira.codehaus.org/browse/MFINDBUGS-122 
				remove this when this version is released -->
			<id>codehaus.snapshots</id>
			<url>http://snapshots.repository.codehaus.org/</url>
		</pluginRepository>
	</pluginRepositories>

	<build>
		<plugins>
			<plugin>
				<groupId>org.eclipse.tycho</groupId>
				<artifactId>tycho-maven-plugin</artifactId>
				<version>${tycho-version}</version>
				<extensions>true</extensions>
			</plugin>
			<plugin>
				<groupId>org.eclipse.tycho</groupId>
				<artifactId>target-platform-configuration</artifactId>
				<version>${tycho-version}</version>
				<configuration>
					<resolver>p2</resolver>
					<pomDependencies>consider</pomDependencies>
				</configuration>
			</plugin>
		</plugins>
		<pluginManagement>
			<plugins>
				<plugin>
					<groupId>org.sonatype.tycho</groupId>
					<artifactId>maven-osgi-compiler-plugin</artifactId>
					<version>${tycho-version}</version>
					<configuration>
						<encoding>UTF-8</encoding>
					</configuration>
				</plugin>
				<plugin>
					<!-- TODO remove workaround when https://issues.sonatype.org/browse/TYCHO-473 
						is fixed -->
					<groupId>org.sonatype.tycho</groupId>
					<artifactId>maven-osgi-source-plugin</artifactId>
					<version>${tycho-version}</version>
					<executions>
						<execution>
							<id>attach-source</id>
							<phase>process-classes</phase>
							<goals>
								<goal>plugin-source</goal>
							</goals>
						</execution>
					</executions>
				</plugin>
				<plugin>
					<groupId>org.apache.maven.plugins</groupId>
					<artifactId>maven-resources-plugin</artifactId>
					<version>2.4.1</version>
					<configuration>
						<encoding>ISO-8859-1</encoding>
					</configuration>
				</plugin>
				<plugin>
					<groupId>org.apache.maven.plugins</groupId>
					<artifactId>maven-antrun-plugin</artifactId>
					<version>1.3</version>
				</plugin>
				<plugin>
					<groupId>org.codehaus.mojo</groupId>
					<artifactId>findbugs-maven-plugin</artifactId>
					<version>2.3.2-SNAPSHOT</version>
					<configuration>
						<findbugsXmlOutput>true</findbugsXmlOutput>
						<failOnError>false</failOnError>
					</configuration>
					<executions>
						<execution>
							<goals>
								<goal>check</goal>
							</goals>
						</execution>
					</executions>
				</plugin>
				<plugin>
					<groupId>org.apache.maven.plugins</groupId>
					<artifactId>maven-pmd-plugin</artifactId>
					<version>2.5</version>
					<configuration>
						<sourceEncoding>utf-8</sourceEncoding>
						<minimumTokens>100</minimumTokens>
						<targetJdk>1.5</targetJdk>
						<format>xml</format>
						<failOnViolation>false</failOnViolation>
					</configuration>
					<executions>
						<execution>
							<goals>
								<goal>cpd-check</goal>
							</goals>
						</execution>
					</executions>
				</plugin>
			</plugins>
		</pluginManagement>
	</build>

	<dependencies>
		<dependency>
			<groupId>org.mockito</groupId>
			<artifactId>mockito-core</artifactId>
			<version>${mockito-version}</version>
		</dependency>
	</dependencies>

	<dependencyManagement>
		<dependencies>
			<dependency>
				<groupId>junit</groupId>
				<artifactId>junit</artifactId>
				<version>${junit-version}</version>
				<scope>test</scope>
			</dependency>
		</dependencies>
	</dependencyManagement>';
    }


} /* end of class PomGenerator_RootPomGenerator */

?>
