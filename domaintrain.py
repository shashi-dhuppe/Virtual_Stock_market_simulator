import nltk
import random
from nltk.corpus import stopwords
from nltk.classify.scikitlearn import SklearnClassifier
import pickle
from sklearn.naive_bayes import MultinomialNB, BernoulliNB, GaussianNB
from sklearn.linear_model import LogisticRegression, SGDClassifier
from sklearn.svm import SVC, LinearSVC, NuSVC
from nltk.classify import ClassifierI
from statistics import mode
from nltk.tokenize import word_tokenize
##import sys
##reload(sys)
##sys.setdefaultencoding('utf8')



class VoteClassifier(ClassifierI):
    def __init__(self, *classifiers):
        self._classifiers = classifiers

    def classify(self, features):
        votes = []
        for c in self._classifiers:
            v = c.classify(features)
            votes.append(v)
##        print(votes)
        return mode(votes)

    def confidence(self, features):
        votes = []
        for c in self._classifiers:
            v = c.classify(features)
            votes.append(v)

        choice_votes = votes.count(mode(votes))
        conf = choice_votes / len(votes)
        return conf
    
short_cg = open("consumer goods.txt","r").read()
short_fin = open("finance.txt","r").read()
short_hce = open("healthcare.txt","r").read()
short_ig = open("Industrial goods.txt","r").read()
short_ser = open("services.txt","r").read()
short_tech = open("Technology.txt","r").read()
short_utl = open("utilities.txt","r").read()


all_words = []
documents = []


stop_words = set(stopwords.words('english'))

#allowed_word_types = ["J","R","V"]
##allowed_word_types = ["J"]

for p in short_cg.split('\n'):
    documents.append( (p, "cg") )   
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

    
for p in short_fin.split('\n'):
    documents.append( (p, "fin") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

for p in short_hce.split('\n'):
    documents.append( (p, "hce") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

for p in short_ig.split('\n'):
    documents.append( (p, "ig") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

for p in short_ser.split('\n'):
    documents.append( (p, "ser") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

for p in short_utl.split('\n'):
    documents.append( (p, "tech") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())

for p in short_tech.split('\n'):
    documents.append( (p, "utl") )
    words = word_tokenize(p)
    pos = nltk.pos_tag(words)
    for w in pos:
        if w not in stop_words:
##        if w[1][0] in allowed_word_types:
            all_words.append(w[0].lower())




##save_documents = open('C:\Python\pickled_algos\documents.pickle','wb')
##pickle.dump(documents, save_documents)
##save_documents.close()


all_words = nltk.FreqDist(all_words)


word_features = list(all_words.keys())[:5000]
##print(word_features)

##save_word_features = open('C:\Python\pickled_algos\word_features5k.pickle','wb')
##pickle.dump(word_features, save_word_features)
##save_word_features.close()


def find_features(document):
    words = word_tokenize(document)
    features = {}
    for w in word_features:
        features[w] = (w in words)
    return features
##
featuresets = [(find_features(rev), category) for (rev, category) in documents]
##print(featuresets)
##
random.shuffle(featuresets)
##print(len(featuresets))

testing_set = featuresets[:30]
training_set = featuresets[30:]


classifier = nltk.NaiveBayesClassifier.train(training_set)
##print("Original Naive Bayes Algo accuracy percent:", (nltk.classify.accuracy(classifier, testing_set))*100)
##classifier.show_most_informative_features(15)

MNB_classifier = SklearnClassifier(MultinomialNB())
MNB_classifier.train(training_set)
##print("MNB_classifier accuracy percent:", (nltk.classify.accuracy(MNB_classifier, testing_set))*100)

BernoulliNB_classifier = SklearnClassifier(BernoulliNB())
BernoulliNB_classifier.train(training_set)
##print("BernoulliNB_classifier accuracy percent:", (nltk.classify.accuracy(BernoulliNB_classifier, testing_set))*100)
##
##
LogisticRegression_classifier = SklearnClassifier(LogisticRegression())
LogisticRegression_classifier.train(training_set)
##print("LogisticRegression_classifier accuracy percent:", (nltk.classify.accuracy(LogisticRegression_classifier, testing_set))*100)
##
LinearSVC_classifier = SklearnClassifier(LinearSVC())
LinearSVC_classifier.train(training_set)
##print("LinearSVC_classifier accuracy percent:", (nltk.classify.accuracy(LinearSVC_classifier, testing_set))*100)
##
##GNB_classifier = SklearnClassifier(GaussianNB())
##GNB_classifier.train(training_set)
##print("GNB_classifier accuracy percent:", (nltk.classify.accuracy(GNB_classifier, testing_set))*100)
##
##
voted_classifier = VoteClassifier(
                                  classifier,
                                  LinearSVC_classifier,
                                  BernoulliNB_classifier,
                                  MNB_classifier,
                                  LogisticRegression_classifier)
##
####
####
####
def sentiment(text):
    feats = find_features(text)
    return voted_classifier.classify(feats)
##,voted_classifier.confidence(feats)
####
##
print(sentiment("Chinas Solar Prices Can Fall 38%, Become Competitive With Coal."))
